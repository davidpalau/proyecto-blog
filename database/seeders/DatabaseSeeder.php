<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {

        Storage::makeDirectory('posts');
        Storage::deleteDirectory('posts');
                // Llamar a los seeders individuales
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class); // Añadir el CategorySeeder
        $this->call(TagSeeder::class); // Asegúrate de tener un seeder para tags si no lo tienes, créalo
        $this->call(PostSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class);
        //         Tag::factory(8)->create();
        // $this->call(PostSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
