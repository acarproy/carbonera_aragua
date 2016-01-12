<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('producto_categoria_id')->unsigned()->index();
            $table->foreign('producto_categoria_id')->references('id')->on('productos_categorias');
            $table->integer('codigo')->unsigned()->index();
            $table->string('referencia');
            $table->decimal('precio',10,2);
            $table->integer('exento');
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
        Schema::drop('productos');
    }
}