<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Diseño web',
            'Desarrollo web',
            'Desarrollo software',
            'Bases de datos'
        ];
        $summaries = [
            'Es la categoría dedicada al diseño y maquetación de sitios web.',
            'Es la categoría enfocada en el desarrollo de aplicaciones y servicios web.',
            'Es la categoría sobre el desarrollo de software en general.',
            'Es la categoría que trata sobre bases de datos y su gestión.'
        ];

        foreach ($categories as $index => $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
                'summary' => $summaries[$index],
            ]);
        }
    }
}
