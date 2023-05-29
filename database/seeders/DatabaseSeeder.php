<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Answer;
use App\Models\Comment;
use App\Models\CommentDislikes;
use App\Models\CommentLikes;
use App\Models\Dislike;
use App\Models\Like;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Question::factory(20)->create();
        Answer::factory(200)->create();
        Like::factory(1500)->create();
        Dislike::factory(1500)->create();
        Comment::factory(5000)->create();
        CommentLikes::factory(2500)->create();
        CommentDislikes::factory(2500)->create();

        User::factory()->create([
            'name' => 'Akmalkhon Burkhonov',
            'email' => 'akmal@mail.ru',
            'email_verified_at' => now(),
            'password' => '12345678', // password
            'remember_token' => Str::random(10),
        ]);
    }






}



