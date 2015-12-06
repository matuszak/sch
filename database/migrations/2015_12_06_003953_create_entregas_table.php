<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('emprestimo_id')->unsigned();
            $table->integer('funcionario_id')->unsigned();

            $table->date('dia_devolucao');
            $table->string('obs');

            $table->foreign('emprestimo_id')->references('id')->on('emprestimos');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
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
        Schema::drop('entregas');
    }
}
