<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razon')->unique();
            $table->string('rif')->unique();
            $table->integer('exento');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('telefono2');
            $table->integer('estado_id')->nullable();
            $table->integer('ciudad_id')->nullable();
            $table->string('direccion');
            $table->integer('estatus');
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
        Schema::drop('clientes');
    }
}
