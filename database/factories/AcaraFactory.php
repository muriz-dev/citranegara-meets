<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acara>
 */
class AcaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_acara' => "A".fake()->randomNumber(3, true),
            'nama_acara' => fake()->sentence(1),
            'lokasi' => fake()->company(),
            'alamat' => fake()->address(),
            'tanggal_mulai' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'waktu_mulai' => fake()->time(),
            'waktu_selesai' => fake()->time(),
            'qrcode' => fake()->word()
        ];
    }
}
