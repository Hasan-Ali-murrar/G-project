<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\ProjectGallery;
use App\Models\City;
use App\Models\Profile_Rating;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
        'email',
        'phone',
        'user_type',
        'image',
        'city_id',
        'address',
        'service_id',
        'service_desc',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function projects(){
        return $this->hasMany(ProjectGallery::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }

    public function prfile_ratings(){
        
    }
    
    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function service_orders(){
        return $this->hasMany(Service_Order::class);
    }

    public function offers(){
        return $this->hasnMany(Offer::class);
    }
}   
