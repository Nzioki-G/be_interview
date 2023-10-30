<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
    ];

    // posts can't exist without users
    public function user() {
        return $this->belongsTo(User::class);
    }

    // a post can have 0/more comments
    public function comments() {
        return $this->hasMany(Comments::class);
    }
}
