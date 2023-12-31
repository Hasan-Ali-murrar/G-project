<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class City extends Model
{
    use HasFactory;
    protected $fillable=['city_name'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
