<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_detalles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pedido_id')->unsigned()->index();
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $table->integer('producto_id')->unsigned()->index();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->decimal('precio',10,2);
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
        Schema::drop('pedidos_detalles');
    }
}