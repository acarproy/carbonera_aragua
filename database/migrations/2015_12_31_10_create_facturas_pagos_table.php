<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas_pagos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('factura_id')->unsigned()->index();
            $table->foreign('factura_id')->references('id')->on('facturas')->onDelete('cascade');
            $table->integer('pago_tipo_id')->unsigned()->index();
            $table->foreign('pago_tipo_id')->references('id')->on('facturas_pagos_tipos');
            $table->decimal('monto', 10, 2);
            $table->string('referencia');
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
        Schema::drop('facturas_pagos');
    }
}