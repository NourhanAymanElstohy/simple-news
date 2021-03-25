<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $collection = 'news';

    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
