<?php

namespace Database\Factories;

use App\Models\Livro;
use App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivroFactory extends Factory
{
    protected $model = Livro::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'descricao' => $this->faker->paragraph(),
            'data_publicacao' => $this->faker->date(),
            'categoria_id' => Categoria::factory(),
        ];
    }
}
