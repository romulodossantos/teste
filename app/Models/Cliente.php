<?php

namespace Data\Factories;

use App\Model\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClienteFactory extends Factory{
    /**
     * Define the models's default state.
     *
     *@return array
     */
    protected $model = Cliente::class;
     public function definition()
    {
       return [
         'nome' => $this->faker->name(),
         'email' => $this->faker->unique()->safeemail(),
         'telefone' => $this->faker->phoneNumber(),
         'endereco' => $this->faker->address(),
         'cpf' =>$this->faker->unique()->numerify('###########'),
         'data_nascimento' => $this->faker->date('Y-m-d', '200-01-
01'),
        ];
    }
}
