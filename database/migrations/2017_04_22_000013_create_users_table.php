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
            $table->string('nick')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('rango', ['Novato', 'Inspector', 'subcomisario', 'Comisario', 'Primer Detective'])->default('Novato');
            $table->integer('criminalesCapturados')->default(0);
            $table->integer('record')->default(0);
            $table->integer('mision')->default(0);
            $table->integer('tiempo')->default(288); // Tiempo expresado en horas. Equivale a 1 mes (30 dias)
            $table->integer('idCriminal')->unsigned()->index()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idCriminal')->references('id')->on('criminal')->onDelete('set null');
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
