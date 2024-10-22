<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('clientes' , function (Blueprint $table){
        $table->id();
        $table->string('nome');
        $table->string('email')->unique();
        $table->string('telefone');
        $table->string('endereco');
        $table->string('cpf')->unique();
        $table->date('data_nascimento');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
