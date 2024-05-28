<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    $name = $this->faker->randomElement(['MySQL', 'HTML5', 'CSS3', 'Layout','Frontend ','Backend', 'framework ']);
    return[
        'name'=> $name,
        'slug'=> Str::slug($name)
    ];
}
}
