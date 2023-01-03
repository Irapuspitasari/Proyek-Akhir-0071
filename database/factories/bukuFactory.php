<?php

namespace Database\Factories;

use App\Models\buku;
use Illuminate\Database\Eloquent\Factories\Factory;

class bukuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = buku::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_buku' => $this->faker->word,
        'nama_buku' => $this->faker->word,
        'kategori' => $this->faker->word,
        'pengarang' => $this->faker->word,
        'penerbit' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
