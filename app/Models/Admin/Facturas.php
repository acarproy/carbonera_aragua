<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\FacturasDetalles;
use App\Models\Admin\FacturasPagos;
use App\Models\Admin\Pedidos;

class Facturas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'facturas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pedido_id', 'iva', 'estatus'];

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
    public function facturasDet()
    {
        return $this->hasMany('App\Models\Admin\FacturasDetalles');
    }

    public function facturasPag()
    {
        return $this->hasMany('App\Models\Admin\FacturasPagos');
    }

    public function pedidos()
    {
        return $this->belongsTo('App\Models\Admin\Pedidos');
    }
}