<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentDislikes extends Model
{
    use HasFactory;
    protected $fillable = ['comment_id', 'user_id'];

    public function comment()
    {
        return $this->hasOne(Comment::class);
    }
}
