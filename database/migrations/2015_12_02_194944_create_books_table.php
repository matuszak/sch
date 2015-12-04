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
            $table->date('book_data');
            $table->string('book_descricao');
            $table->integer('book_edit_id');
            $table->integer('book_gene_id');
            $table->string('book_isbn');
            $table->string('book_issn');
            $table->string('book_tipo_obra');
            $table->string('book_status');
            $table->timestamps();
            $table->foreign('book_edit_id')->references('edit_id')->on('publishers');
            $table->foreign('book_gene_id')->references('gene_id')->on('genres');
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
