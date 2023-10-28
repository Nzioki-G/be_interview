<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\posts::factory(21)->create();
        \App\Models\comments::factory(12)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'test@123',
            'username' => 'aTester',
        ]);

        \App\Models\posts::factory()->create([
            'title' => 'first blog, yaay',
            'content' => 'wanna know all about blogging? Well, go no farther...',
            'author' => 'user_id goes here',
        ]);

        \App\Models\comments::factory()->create([
            'content' => 'time to blog!',
        ]);
    }
}
