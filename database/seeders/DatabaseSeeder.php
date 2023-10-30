<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Posts;
use App\Models\Comments;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(3)
            ->has(Posts::factory()->count(9)
                ->has(Comments::factory()->count(11)))
            ->create();

           // 50 new users each having 3 posts
        // \App\Models\User::factory()
        //     ->count(15)
        //     ->hasPosts(3)
        //     ->create();

        // $new_users = \App\Models\User::factory(10)->create();
        
        // foreach ($new_users as $new_user) {
        //     \App\Models\Posts::factory(21)->create();
        // }
        //     \App\Models\Comments::factory(12)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => 'test@123',
        //     'username' => 'aTester',
        // ]);

        // \App\Models\Posts::factory()->create([
        //     'title' => 'first blog, yaay',
        //     'content' => 'wanna know all about blogging? Well, go no farther...',
        //     'author' => 'user_id goes here',
        // ]);

        // \App\Models\Comments::factory()->create([
        //     'content' => 'time to blog!',
        // ]);
    }
}
