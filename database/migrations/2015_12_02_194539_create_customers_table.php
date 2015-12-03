<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('cust_id');
            $table->string('cust_cpf', 11);
            $table->string('cust_email', 60);
            $table->string('cust_endereco', 100);
            $table->string('cust_fone', 16);
            $table->string('cust_nome', 80);
            $table->string('cust_password', 40);
            $table->string('cust_rg', 20);
            $table->char('cust_sexo', 1);
            $table->string('cust_tipo', 10);
            $table->integer('cust_n_emprestimos');
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
        Schema::drop('customers');
    }
}
