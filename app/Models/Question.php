<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

//    public function comments()
//    {
//        return $this->hasMany(QuestionComment::class);
//    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
