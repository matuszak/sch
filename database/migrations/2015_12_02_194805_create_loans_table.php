<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('loan_id');
            $table->ingeger('loan_book_id');
            $table->ingeger('loan_func_id');
            $table->ingeger('loan_cust_id');
           // $table->foreign('loan_livro_fk')->references('book_id')->on('books');
            $table->integer('loan_x_emprestou');
            $table->date('loan_dia_emprestimo');
            $table->date('loan_dia_devolucao');
            $table->date('loan_data_prevista');
            $table->string('loan_avisos');
            $table->char('loan_sala_de_leitura')
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
        Schema::drop('loans');
    }
}
