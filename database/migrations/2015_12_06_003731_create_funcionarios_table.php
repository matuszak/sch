<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 90);
            $table->string('cpf', 16);
            $table->date('dataNascimento');
            $table->string('fone', 30);
            $table->char('sexo', 1);
            $table->string('endereco', 150);
            $table->string('email', 120);
            $table->string('nivel', 4);
            $table->integer('user_id');
            $table->integer('matricula');
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
        Schema::drop('funcionarios');
    }
}
