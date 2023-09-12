<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(app()->isProduction()) {
            return;
        }

        if(User::count() < 10) {
            User::factory(rand(100, 200))->create();
        }

        $users = User::limit(rand(100, 200))->inRandomOrder()->get();

        foreach ($users as $user) {
            Post::factory(rand(100, 1000))->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
