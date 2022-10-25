<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\posts;
use App\Models\category;
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
        // category::factory()->create([
        //     'title' => 'Dogs',
        //     'description' => 'He was a very good boy'
        // ]);

        // category::factory()->create([
        //     'title' => 'Cats',
        //     'description' => 'Harley likes to sleep on my head at night'
        // ]);
        

        // foreach(category::all() as $category) {
        //     $category->posts()->saveMany(posts::factory(5)->make());
        // }
        posts::factory()
        ->count(50)
        ->create();

        category::factory()
        ->count(5)
        ->create();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
