<?php

namespace Tests\Feature;

use App\Models\Autor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AutorControllerTest extends TestCase
{
    use RefreshDatabase; // Garantir que o banco de dados seja "limpo" a cada teste

    /** @test */
    public function pode_listar_autores_com_paginacao()
    {
        // Arrange: Criar alguns autores no banco de dados
        Autor::factory()->count(15)->create();

        // Act: Acessar a rota de listagem de autores
        $response = $this->get('/autores');

        // Assert: Verificar se a resposta contém os autores paginados
        $response->assertStatus(200);
        $response->assertViewHas('autores');
    }
}
