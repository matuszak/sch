<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('book_assunto');
            $table->string('book_autor');
            $table->string('book_classificacao');
            $table->string('book_descricao');
            $table->integer('book_editora_id');
            $table->integer('book_genero_id');
            $table->string('book_isbn');
            $table->string('book_issn');
            $table->char('book_tipo_obra' 3);
            $table->char('book_status' 1);
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
        Schema::drop('books');
    }
}
