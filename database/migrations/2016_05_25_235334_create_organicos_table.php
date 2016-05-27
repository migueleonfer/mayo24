<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganicosTable extends Migration
{

    public function up()
    {
        Schema::create('organicos', function (Blueprint $table) {
            $table->increments('idorg')->unique();
            $table->integer('org_idgeo')->unsigned();
            $table->string('org_nombre', 60);
            $table->string('org_abrevia', 16);          
            $table->integer('org_institucion');
            $table->integer('org_ejecutivo');
            $table->integer('org_subejecutivo');
            $table->integer('org_coordinador');
            $table->integer('org_director');
            $table->integer('org_departamento');
            $table->integer('org_seccion');
            $table->string('org_estado', 20);
            $table->string('org_digitador', 40);
            $table->rememberToken();
            $table->nullableTimestamps();                    
            $table->foreign('org_idgeo')->references('idgeo')->on('geograficos');
        });                
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organicos');         
    }
}
