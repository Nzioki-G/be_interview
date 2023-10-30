<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    // mass assignment
    protected $fillable = ['user_id', 'posts_id', 'content'];

    // this comment can't exist without  post
    public function posts() {
        return $this->belongsTo(Posts::class);
    }
    // this comment must be created by a user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
