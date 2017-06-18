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
            $table->string('imagen');
            $table->string('ubicacion'); // ID de los paises por donde tenes que pasar para llegar a encontrarlo
            $table->integer('idPelo')->unsigned()->index()->nullable();
            $table->integer('idSexo')->unsigned()->index()->nullable();
            $table->integer('idTez')->unsigned()->index()->nullable();
            $table->integer('idDistintivo')->unsigned()->index()->nullable();
            $table->integer('idNacionalidad')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->foreign('idDistintivo')->references('id')->on('distintivo')->onDelete('set null');
            $table->foreign('idPelo')->references('id')->on('pelo')->onDelete('set null');
            $table->foreign('idTez')->references('id')->on('tez')->onDelete('set null');
            $table->foreign('idSexo')->references('id')->on('sexo')->onDelete('set null');
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
