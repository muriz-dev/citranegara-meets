<?php

namespace Database\Factories;

use App\Models\Acara;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengunjung>
 */
class PengunjungFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_acara' => Acara::where('id', rand(1, 10))->value('kode_acara'),
            'nama_lengkap' => fake()->name(),
            'telepon' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'profil' => fake()->randomElement(['Pengajar','Pelajar', 'Umum']),
            'status' => fake()->jobTitle(),
            'asal' => fake()->company(),
        ];
    }
}
