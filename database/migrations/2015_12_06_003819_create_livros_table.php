<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('editora_id')->unsigned();
            $table->integer('genero_id')->unsigned();
            $table->integer('serie_id')->unsigned();

            $table->string('titulo', 100);
            $table->string('subtitulo', 150);
            $table->string('autor', 130);
            $table->string('classificacao', 30);
            $table->char('status', 5);
            $table->string('tipo_obra', 55);
            $table->string('sala_leitura', 1);
            $table->timestamps();

            $table->foreign('editora_id')->references('id')->on('editoras');
            $table->foreign('serie_id')->references('id')->on('series');
            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('livros');
    }
}
