<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Answer;
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
        User::factory(20)->create();
        Question::factory(40)->create();
        Answer::factory(120)->create();
        Like::factory(180)->create();
        Dislike::factory(180)->create();
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Akmalkhon Burkhonov',
            'email' => 'akmal@mail.ru',
            'email_verified_at' => now(),
            'password' => '12345678', // password
            'remember_token' => Str::random(10),
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }






}



