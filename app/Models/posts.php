<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;   

    // this post belongs to user
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }

    // // this post has many comments
    // public function comments() {
    //     return $this->hasMany(comments::class);
    // }
}
