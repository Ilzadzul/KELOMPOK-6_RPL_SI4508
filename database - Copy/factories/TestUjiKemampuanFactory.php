<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestUjiKemampuan>
 */
class TestUjiKemampuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_test' => fake()->sentence(4),
            'tanggal_pelaksanaan' => fake()->date(),
            'tempat_pelaksanaan' => fake()->address(),
            'anggota_test' => fake()->sentence(5)
        ];
    }
}
