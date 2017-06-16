<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriminalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->enum('pelo', ['Marron', 'Rubio', 'Canoso', 'Calvo', 'Colorado']);
            $table->enum('sexo', ['Masculino', 'Femenino']);
            $table->enum('distintivo', ['Ninguno', 'Tatuaje', 'Cicatriz']);
            $table->enum('tez', ['Palida', 'Clara', 'Bronceada', 'Oscura']);
            $table->mediumText('pista');
            $table->string('ubicacion'); // ID de los paises por donde tenes que pasar para llegar a encontrarlo
            $table->integer('idNacionalidad')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->foreign('idNacionalidad')->references('id')->on('pais')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criminal');
    }
}
