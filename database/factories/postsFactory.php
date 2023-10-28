<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\posts>
 */
class postsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // the posts factory for inputing dummy data
            // 'id' => $this->faker->randomDigitNotNull(),
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->paragraph(5),
            'author' => $this->faker->sentence(),
        ];
    }
}
