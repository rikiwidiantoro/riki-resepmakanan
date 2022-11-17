<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resep>
 */
class ResepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2,8)),
            'deskripsi' => $this->faker->paragraph(),
            'bahan' => $this->faker->paragraph(),
            'pembuatan' => $this->faker->paragraph(),
            'gambar' => $this->faker->word().'.jpg',
        ];
    }
}
