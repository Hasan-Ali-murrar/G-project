<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('account', function () {
    return view('pages/account');
});
Route::get("create_portfoilo",function(){
    return view("pages/createPortfoilo");
});

Route::get('login', function () {
    return view('pages/login');
});
Route::get('notes', function () {
    return view('pages/notes');
});

Route::get('passwordpage', function () {
    return view('pages/passwordpage');

});Route::get('portfoilo', function () {
    return view('pages/portfoilo');
});

Route::get('hasan', function () {
    return view('pages/profile');
});

Route::get('search', function () {
    return view('pages/search');
});

Route::get('/', function () {
    return view('pages/welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
