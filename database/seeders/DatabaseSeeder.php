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
        Comment::factory(3000)->create();
        CommentLikes::factory(2500)->create();
        CommentDislikes::factory(2500)->create();

        User::factory()->create([
            'name' => 'James Cameron',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678', // password
            'remember_token' => Str::random(10),
        ]);


        User::factory()->create([
            'name' => 'Daniel Anderson',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678',
            'role' => 'expert',
            'biography' => 'Daniel Anderson was born on April 15, 1985 in Moscow, Russia. Since childhood, he showed interest in art and culture, and his creative potential was noticed by his parents and teachers. Daniel Anderson  showed a special talent in the field of literature and acting.
After graduating from high school, Daniel Anderson  entered the Lomonosov Moscow State University, where he studied philology and at the same time attended a theater studio. At university, he actively participated in theater productions and wrote articles for student magazines, demonstrating his talent in the field of creativity and analytics.
After receiving a bachelors degree in philology, Konstantin continued his education at the Moscow Theater Academy, where he studied acting. At the academy, he successfully played several significant roles and received recognition from his teachers and colleagues.
    In 2010, Daniel Anderson  starred in his first big movie role, which brought him wide fame and recognition from the public and critics. Since then, he has appeared in several acclaimed films and TV series, demonstrating his unique acting technique and ability to embody a variety of characters.',
            'work_experience' => '',
            'study_place' => 'Москве, Россия',
            'contact' => '@Mr.anderson',
            'theme' => 'music',
            'short_description' => 'Daniel Anderson In 2010, Romanov starred in his first big movie role, which brought him wide fame and recognition from the public and critics',
            'remember_token' => Str::random(10),
        ]);
    }






}



