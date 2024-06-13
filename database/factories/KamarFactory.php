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
            'nomor_kamar' => $this->faker->unique()->regexify('[A-Z][0-9]{2}'),
            'nama_kamar' => $this->faker->word,
            'tipe_kamar' => $this->faker->randomElement(['standard', 'superior', 'delux']),
            'bed' => $this->faker->randomElement(['single', 'twin', 'double', 'king']),
            'kapasitas' => $this->faker->randomElement(['1', '2', '3', '4']),
            'status' => $this->faker->randomElement(['0', '1', '2']),
        ];
    }
}
