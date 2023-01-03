<?php

namespace Database\Factories;

use App\Models\petugas;
use Illuminate\Database\Eloquent\Factories\Factory;

class petugasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = petugas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_petugas' => $this->faker->word,
        'nama_petugas' => $this->faker->word,
        'shift' => $this->faker->word,
        'jabatan' => $this->faker->word,
        'alamat' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
