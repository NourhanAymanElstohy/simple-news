<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class News extends Model
{
    // protected $connection = 'news_db';
    protected $collection = 'news';

    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
