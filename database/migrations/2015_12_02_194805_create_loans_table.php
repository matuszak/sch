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
            $table->ingeger('loan_clie_id');
            $table->integer('loan_x_emprestou');
            $table->date('loan_dia_emprestimo');
            $table->date('loan_dia_devolucao');
            $table->date('loan_data_prevista');
            $table->string('loan_avisos');
            $table->char('loan_sala_de_leitura' 1);
            $table->timestamps();
            $table->foreign('loan_book_id')->references('book_id')->on('books');
            $table->foreign('loan_func_id')->references('func_id')->on('employees');
            $table->foreign('loan_clie_id')->references('clie_id')->on('customers');

       
        });
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
