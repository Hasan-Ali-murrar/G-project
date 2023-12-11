<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillabel=['service_name'];
    

    public function users(){
        return $this->hasMany(User::class);
    }

    public function service(){    //اعادة التفكير في اسم function 
        return $this->hasOne(Service_Order::class);
    }

}
