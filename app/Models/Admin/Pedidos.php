<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\PedidosDetalles;
use App\Models\Admin\Clientes;
use App\Models\Admin\Users;
use App\Models\Admin\Facturas;

class Pedidos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pedidos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id', 'usuario_id', 'estatus'];

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
    public function pedidoDet()
    {
        return $this->hasMany('App\Models\Admin\PedidosDetalles');
    }

    public function clientes()
    {
        return $this->belongsTo('App\Models\Admin\Clientes');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\Admin\Users');
    }

    public function facturas()
    {
        return $this->hasOne('App\Models\Admin\Facturas');
    }
}