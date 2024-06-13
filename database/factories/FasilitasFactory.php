<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fasilitas>
 */
class FasilitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_fasilitas' => $this->faker->word,
            'deskripsi_fasilitas' => $this->faker->paragraph,
            'foto_fasilitas' => $this->faker->text,
            // 'foto_fasilitas' => $this->faker->imageUrl(), // uncomment this line for random image URLs
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
