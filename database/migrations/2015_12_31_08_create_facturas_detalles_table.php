<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas_detalles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('factura_id')->unsigned()->index();
            $table->foreign('factura_id')->references('id')->on('facturas')->onDelete('cascade');
            $table->integer('producto_id')->unsigned()->index();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->decimal('precio', 10, 2);
            $table->integer('cantidad');
            $table->integer('exento');
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
        Schema::drop('facturas_detalles');
    }
}