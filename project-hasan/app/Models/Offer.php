<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillabel = [
        'user_id',
        'service_order_id',
        'offer_cost',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function service_order(){
        return $this->belongsTo(Service_Order::class);
    }
}
