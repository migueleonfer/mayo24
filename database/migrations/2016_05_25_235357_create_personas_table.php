<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{

    public function up()
    {
         Schema::create('personas', function (Blueprint $table) {
            $table->increments('idper')->unique();
            $table->integer('per_idorg')->unsigned();
            $table->string('per_cedula', 15);
            $table->string('per_apellidos', 24);                        
            $table->string('per_nombres', 24);
            $table->string('per_titulo', 20);
            $table->string('per_mail',64);
            $table->string('per_telefono',10);
            $table->string('per_celular',10);
            $table->string('per_estado', 20);
            $table->string('per_digitador', 40);
            $table->rememberToken();
            $table->nullableTimestamps();         
            $table->foreign('per_idorg')->references('idorg')->on('organicos');   
        });   
    }

    public function down()
    {
        Schema::drop('personas');
    }
}
