<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    // this comment belongs to post
    // public function posts() {
    //     return $this->belongsTo(posts::class);
    // }
}
