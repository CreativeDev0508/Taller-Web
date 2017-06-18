<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario');
            $table->integer('puntaje');
            $table->integer('mision')->default(0);
            $table->integer('criminalesCapturados')->default(0);
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
        Schema::dropIfExists('top');
    }
}
