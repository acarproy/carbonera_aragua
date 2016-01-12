<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Pedidos;
use App\Models\Admin\Productos;

class PedidosDetalles extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pedidos_detalles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pedido_id', 'producto_id', 'precio', 'cantidad', 'exento'];

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
    public function pedidos()
    {
        return $this->belongsTo('App\Models\Admin\Pedidos');
    }

    public function productos()
    {
        return $this->hasOne('App\Models\Admin\Productos');
    }
}