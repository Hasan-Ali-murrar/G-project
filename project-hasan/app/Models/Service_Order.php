<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Order extends Model
{
    use HasFactory;
    protected $fillabel = [
        'user_id',
        'service_id',
        'desc_order',
        'order_status',
        'date_service',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function service_order(){    // اعادة  التفكير في اسم  function
        return $this->hasOne(Service::class);
    }

    public function offer(){
         return $this->hasMany(Offer::class,'service_order_id');
    }
}
