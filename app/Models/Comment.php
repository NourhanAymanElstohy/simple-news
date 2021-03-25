<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Comment extends Model
{
    protected $collection = 'comments';
    protected $primaryKey = '_id';
    protected $fillable = ['comment', 'user_id', 'news_id'];

    public function news()
    {
        return $this->belongsTo(News::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
