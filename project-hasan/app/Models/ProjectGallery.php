<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class ProjectGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'img',
        'work_desc',
        'completion_date',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
