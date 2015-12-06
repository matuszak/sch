<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('livro_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->integer('funcionario_id')->unsigned();

            $table->date('dia_emprestimo');
            $table->date('dia_previsao');
            $table->date('dia_devolucao');
            $table->string('avisos', 150);
            $table->timestamps();

            $table->foreign('livro_id')->references('id')->on('livros');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emprestimos');
    }
}
