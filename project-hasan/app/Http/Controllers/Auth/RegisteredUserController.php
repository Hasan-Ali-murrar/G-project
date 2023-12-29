<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Http\UploadedFile;
use App\Models\Service;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $services=Service::all();
        $cities=City::all();
        return view('auth.register',compact('cities','services'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type'=>['required'],
            'city_id'=>['required'],
            'service_id'=>['required'],
            'service_desc'=>['required'],
            

        ]);
        $image=$request->file('image');
        $imageName=time(). '.' .$image->getClientOriginalExtension();
        $image->move(public_path('images'),$imageName);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone,
            'user_type'=>$request->input('user_type','customer'),
            'image'=>$request->image,
            'city_id'=>$request->city_id,
            'address'=>$request->address,
            'service_id'=>$request->service_id,
            'service_desc'=>$request->service_desc,

           
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
