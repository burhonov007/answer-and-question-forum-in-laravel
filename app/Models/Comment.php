<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment','user_id','answer_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        return $this->hasMany(CommentLikes::class);
    }
    public function dislikes()
    {
        return $this->hasMany(CommentDislikes::class);
    }
    // methods
    public function likeCount()
    {
        return $this->likes()->count();
    }
    public function dislikeCount()
    {
        return $this->dislikes()->count();
    }
}
