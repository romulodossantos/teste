<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Autor;

class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Autor::class;
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'biografia' => $this->faker->paragraph(),
            'data_nascimento' => $this->faker->date(),
        ];
    }
}
