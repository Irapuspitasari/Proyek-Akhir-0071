<?php

namespace Database\Factories;

use App\Models\anggota;
use Illuminate\Database\Eloquent\Factories\Factory;

class anggotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = anggota::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_anggota' => $this->faker->word,
        'nama_anggota' => $this->faker->word,
        'no_tlp' => $this->faker->word,
        'status' => $this->faker->word,
        'alamat' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
