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
            $table->enum('rango', ['Novato', 'Inspector', 'subcomisario', 'Comisario', 'Primer Detective'])->default('Novato');
            $table->integer('criminalesCapturados')->default(0);
            $table->integer('jefesCapturados')->default(0);
            $table->integer('contadorCriminales')->default(0);
            $table->integer('puntaje')->default(0);
            $table->integer('record')->default(0);
            $table->integer('tiempo')->default(420); // Tiempo expresado en minutos
            $table->integer('idJefe')->unsigned()->index()->nullable()->default(1);
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
