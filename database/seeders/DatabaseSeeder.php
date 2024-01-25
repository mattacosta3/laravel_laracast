<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        Category::factory(13)->create();
        // $user = User::factory()->create();
        
        // Post::factory(5)->create([
        //     'user_id' => $user->id
        // ]);

        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        // User::factory()->create();

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Category::create([
        //     'name' => 'Hobby',
        //     'slug' => 'hobby'
        // ]);

        // Post::create([
        //     'user_id' => '1',
        //     'category_id' => '1',
        //     'slug' => 'my-personal-post',
        //     'title' => 'Personal Post',
        //     'excerpt' => '<p> This is the exceprt for my personal post </p>',
        //     'body' => '<p> This is the body of my personal post...</p>'
        // ]);

        // Post::create([
        //     'user_id' => '2',
        //     'category_id' => '2',
        //     'slug' => 'my-work-post',
        //     'title' => 'Work Post',
        //     'excerpt' => '<p>This is the exceprt for my work post</p>',
        //     'body' => '<p> This is the body of my work post...</p>'
        // ]);

        // Post::create([
        //     'user_id' => '3',
        //     'category_id' => '3',
        //     'slug' => 'my-hobby-post',
        //     'title' => 'Hobby Post',
        //     'excerpt' => '<p> This is the exceprt for my hobby post </p>',
        //     'body' => '<p> This is the body of my hobby post...</p>'
        // ]);
        
    }
}
