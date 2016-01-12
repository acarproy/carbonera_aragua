<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pedido_id')->unsigned()->index();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->decimal('iva',2,2);
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
        Schema::drop('facturas');
    }
}