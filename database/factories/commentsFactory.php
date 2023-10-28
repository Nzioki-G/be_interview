<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\posts;
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
    public function definition(): array
    {
        $blogs = posts::all()->pluck('id')->toArray();
        return [
            // make dummy comments
            'content' => $this->faker->sentence(1),
        ];
    }
}
