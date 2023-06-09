<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    use HasFactory;
    protected $fillable = ['answer_id','user_id'];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
