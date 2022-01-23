<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'aaa',
            'email' => 'aaa@aaa.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'bbb',
            'email' => 'bbb@bbb.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'ccc',
            'email' => 'ccc@ccc.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'ddd',
            'email' => 'ddd@ddd.com',
            'password' => bcrypt('password'),
        ]);

        Post::create([
            'title' => 'sample',
            'price' => '2500',
            'body' => '本文です。',
            'describe' => 'コースの説明が入ります。',
            'user_id' => '1',
        ]);

        Post::create([
            'title' => 'sample',
            'price' => '500',
            'body' => '本文です。',
            'describe' => 'コースの説明が入ります。',
            'user_id' => '2',
        ]);

        Post::create([
            'title' => 'sample',
            'price' => '5000',
            'body' => '本文です。',
            'describe' => 'コースの説明が入ります。',
            'user_id' => '3',
        ]);

        Post::create([
            'title' => 'sample',
            'price' => '10000',
            'body' => '本文です。',
            'describe' => 'コースの説明が入ります。',
            'user_id' => '4',
        ]);
    }
}
