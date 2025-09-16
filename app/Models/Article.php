<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['image', 'category', 'title', 'content', 'published_at'];
}
