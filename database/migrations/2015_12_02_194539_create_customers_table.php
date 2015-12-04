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
            $table->increments('clie_id');
            $table->string('clie_cpf', 11);
            $table->string('clie_email', 60);
            $table->string('clie_endereco', 100);
            $table->string('clie_fone', 16);
            $table->string('clie_nome', 80);
            $table->integer('clie_n_emprestimos');
            $table->string('clie_password', 40);
            $table->string('clie_rg', 20);
            $table->char('clie_sexo', 1);
            $table->string('clie_tipo', 10);
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
