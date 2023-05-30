<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = ['answer', 'question_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function dislikes()
    {
        return $this->hasMany(Dislike::class);
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
    public function commentCount()
    {
        return $this->comments()->count();
    }

    public function likeByUser($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }

    public function dislikeByUser($userId)
    {
        return $this->dislikes()->where('user_id', $userId)->exists();
    }

    public function commentByUser($userId)
    {
        return $this->comments()->where('user_id', $userId)->exists();
    }
}
