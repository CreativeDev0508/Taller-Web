<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('pelo', ['Castraño', 'Rubio', 'Canoso', 'Calvo', 'Colorado']);
            $table->enum('sexo', ['Masculino', 'Femenino']);
            $table->enum('distintivo', ['Tatuaje', 'Cicatriz']);
            $table->enum('tez', ['Palida', 'Clara', 'Bronceada', 'Oscura']);
            $table->integer('idNacionalidad')->unsigned()->index()->nullable();
            $table->integer('idUsuario')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->foreign('idNacionalidad')->references('id')->on('pais')->onDelete('set null');
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden');
    }
}
