<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    public function run()
    {
        $tags = [
            'PHP',
            'JavaScript',
            'HTML5',
            'CSS3',
            'Laravel',
            'Vue.js',
            'React',
            'Node.js'
        ];
        $summaries = [
            'Hypertext Preprocessor es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web...',
            'Es un lenguaje de secuencias de comandos que te permite crear contenido de actualización dinámica, controlar multimedia, animar imágenes...',
            'El Lenguaje de Marcado de Hipertexto (HTML) es el código que se utiliza para estructurar y desplegar una página web y sus contenidos.',
            'Es un lenguaje que maneja el diseño y presentación de las páginas web, es decir, cómo lucen cuando un usuario las visita.',
            'Es un framework de PHP y es utilizado para desarrollar aplicaciones web.',
            'Es un marco JavaScript progresivo de código abierto para crear interfaces de usuario (UI) y aplicaciones de una sola página.',
            'Es una biblioteca Javascript de código abierto diseñada para crear interfaces de usuario con el objetivo de facilitar el desarrollo de aplicaciones en una sola página.',
            'Es un entorno controlado por eventos diseñado para crear aplicaciones escalables, permitiéndote establecer y gestionar múltiples conexiones al mismo tiempo.'
        ];

        foreach ($tags as $index => $tag) {
            Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag),
                'summary' => $summaries[$index],
            ]);
        }
    }
}
