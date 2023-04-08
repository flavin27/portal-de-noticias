<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->text(),
            'conteudo' => $this->faker->paragraph(),
            'username' => $this->faker->name(),
            'created_at' => fn() => now(),
            'updated_at' => fn() => now()
        ];
    }
}
