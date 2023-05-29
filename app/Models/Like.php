<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ['answer_id','user_id'];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
