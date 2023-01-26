<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penelitian>
 */
class PenelitianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => fake()->sentence(),
            'nomor' => fake()->randomNumber(),
            'volume' => fake()->randomNumber(),
            'tahun' => fake()->year(),
            'bidang_industri' => "aplikasigame",
            'link_artikel' => fake()->slug(),
            'akademisi_id' => 0
        ];
    }
}
