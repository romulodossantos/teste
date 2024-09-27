<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Categoria;

class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Categoria::class;
    public function definition()
    {
        return [
            'nome' => $this->faker->word(),
        ];
    }
}
