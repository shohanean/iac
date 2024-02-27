<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    function user()
    {
        return $this->hasOne(User::class, "id", "user_id");
    }
    function comments()
    {
        return $this->hasMany(Comment::class, "blog_id", "id");
    }
}
