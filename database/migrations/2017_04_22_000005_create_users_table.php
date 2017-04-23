<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('rango', ['Novato', 'Inspector', 'subcomisario', 'Comisario', 'Primer Detective']);
            $table->integer('criminalesCapturados');
            $table->integer('jefesCapturados');
            $table->integer('contadorCriminales');
            $table->integer('puntaje');
            $table->integer('record');
            $table->integer('tiempo');
            $table->integer('idJefe')->unsigned()->index()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idJefe')->references('id')->on('jefe')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
