<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\ProductosCategorias;
use App\Models\Admin\PedidosDetalles;

class Productos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_categoria_id', 'codigo', 'referencia', 'precio', 'exento', 'estatus'];

    /**
    * Timestamps fields settings, use true if you need updated_at and create_at
    * @var string
    */
    public $timestamps = true;

    /**
     * many-to-many relationship method.
     *
     * @return QueryBuilder
     */
    public function pedidosDet()
    {
        return $this->belongsToMany('App\Models\Admin\PedidosDetalles');
    }

    public function productosCat()
    {
        return $this->belongsTo('App\Models\Admin\ProductosCategorias');
    }

    public function listProductosCat()
    {
        return ProductosCategorias::lists('descripcion', 'id')->toArray();
    }
}