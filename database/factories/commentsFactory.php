<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Posts;
use App\Models\User;
use Database\Factories\postsFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comments>
 */
class commentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()//: array
    {
        // $blogs = Posts::all()->pluck('id')->toArray();
        return [
            // make dummy comments
            'posts_id' => Posts::factory(),
            'user_id' => User::factory(),
            'content' => $this->faker->sentence(1),
        ];
    }
}
