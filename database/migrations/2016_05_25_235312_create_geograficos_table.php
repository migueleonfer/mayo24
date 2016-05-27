<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeograficosTable extends Migration
{
    public function up()
    {
        Schema::create('geograficos', function (Blueprint $table) {

            $table->increments('idgeo')->unique();
            $table->string('geo_nombre',60);
            $table->string('geo_abrevia',20);
            $table->string('geo_letras',4);            
            $table->integer('geo_pais')->unsigned();            
            $table->integer('geo_region')->unsigned()->default(0);
            $table->integer('geo_provincia')->unsigned()->default(0);   
            $table->integer('geo_canton')->unsigned()->default(0);
            $table->integer('geo_sector')->unsigned()->default(0);
            $table->integer('geo_parroquia')->unsigned()->default(0);
            $table->string('geo_natural',20)->nullable();            
            $table->string('geo_politica',20)->nullable(); 
            $table->string('geo_estado',20);            
            $table->string('geo_digitador',40);  
            $table->rememberToken();                                    
            $table->timestamps(); 
        }); 
    }

    public function down()
    {
        Schema::drop('geograficos'); 
    }
}
