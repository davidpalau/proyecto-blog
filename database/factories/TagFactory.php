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

        $name = $this->faker->randomElement(['PHP','JavaScript','HTML5', 'CSS3', 'Laravel', 'Vue.js', 'React', 'Node.js']);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'summary' => $this->faker->sentence,
        ];
    }
}
