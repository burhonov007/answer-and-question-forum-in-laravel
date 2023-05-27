<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Dislike;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dislike>
 */
class DislikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'answer_id' => Answer::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'dislikes' => 1,
        ];
    }
}
