<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'service_order_id',
        'rating',
        'comment',
    ];
    
    public function user(){
        return $this->belongsTo(Review::class);
    }

    public function service_order(){
        return $this->hasOne(Service_Order::class);
    }
}
