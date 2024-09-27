<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Autor;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*  DB::table('autores')->insert([
            [
                'nome' => 'J.K. Rowling',
                'biografia' => 'Autora da série Harry Potter.',
                'data_nascimento' => '1965-07-31',
            ],
            [
                'nome' => 'George R. R. Martin',
                'biografia' => 'Criador de As Crônicas de Gelo e Fogo.',
                'data_nascimento' => '1948-09-20',
            ]
        ]); */
        Autor::factory()->count(100)->create();
    }
}
