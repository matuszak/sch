<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('func_id');
            $table->string('func_cpf', 11);
            $table->string('func_email', 60);
            $table->string('func_endereco', 100);
            $table->string('func_fone', 16);
            $table->string('func_nome', 80);
            $table->string('func_password', 40);
            $table->string('func_rg', 20);
            $table->char('func_sexo', 1);
            $table->string('func_tipo', 10);
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
        Schema::drop('employees');
    }
}
