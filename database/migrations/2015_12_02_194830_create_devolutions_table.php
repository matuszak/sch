<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devolutions', function (Blueprint $table) {
            $table->increments('devo_id');
            $table->integer('devo_loan_id');
            $table->integer('devo_book_id');
            $table->integer('devo_func_id');
            $table->date('devo_dia');
            $table->timestamps();
            $table->foreign('devo_loan_id')->references('loan_id')->on('loans');
            $table->foreign('devo_book_id')->references('book_id')->on('books');
            $table->foreign('devo_func_id')->references('func_id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('devolutions');
    }
}
