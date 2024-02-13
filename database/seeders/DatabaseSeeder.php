<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
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
        User::create([
            'name' => 'Riandalis Purnama Deva',
            'username' => 'riandalis',
            'email' => 'riandalis4@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'description' => 'Tulisan yang berisi tentang Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'description' => 'Tulisan yang berisi tentang Pribadi',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Gaming',
            'description' => 'Tulisan yang berisi tentang Game',
            'slug' => 'gaming'
        ]);

        Blog::factory(20)->create();
    }
}
