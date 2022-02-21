<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Post::factory(10)->create();

        Category::create([
            'name' => 'Teknologi Informasi',
            'slug' => 'teknologi-informasi'
        ]);

        Category::create([
            'name' => 'Teknologi Komputer',
            'slug' => 'teknologi-komputer'
        ]);

        Category::create([
            'name' => 'Bahasa Inggris',
            'slug' => 'bahasa-inggris'
        ]);
    }
}
