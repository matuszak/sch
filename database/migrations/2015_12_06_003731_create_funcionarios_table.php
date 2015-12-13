<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->string('nome', 16);
            $table->string('sobrenome', 50);
            $table->integer('user_id');
            $table->string('cpf', 16);
            $table->string('rg', 16);
            $table->date('dataNascimento');
            $table->string('foneGeral', 18);
            $table->string('foneComercial', 18);
            $table->char('sexo', 1);
            $table->string('endereco', 100);
            $table->string('cargo', 18);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('funcionarios');
    }
}
