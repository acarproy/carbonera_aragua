<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Facturas;
use App\Models\Admin\FacturasPagosTipos;

class FacturasPagos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'facturas_pagos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['factura_id', 'pago_tipo_id', 'monto', 'referencia'];

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
    public function facturas()
    {
        return $this->belongsTo('App\Models\Admin\Facturas');
    }

    public function facturasPT()
    {
        return $this->belongsTo('App\Models\Admin\FacturasPagosTipos');
    }
}