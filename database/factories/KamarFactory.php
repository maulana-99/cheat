<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kamar>
 */
class KamarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kamar' => $this->faker->word,
            'tipe_kamar' => $this->faker->randomElement(['standard', 'superior', 'delux']),
            'bed' => $this->faker->randomElement(['single', 'twin', 'double', 'king']),
            'kapasitas' => $this->faker->randomElement(['1', '2', '3', '4']),
            'quantity' => $this->faker->numberBetween(1, 100),
            'deskripsi' => $this->faker->text,
        ];
    }
}
