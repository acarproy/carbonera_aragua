<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Facturas;
use App\Models\Admin\Productos;

class FacturasDetalles extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'facturas_detalles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['factura_id', 'producto_id', 'precio', 'cantidad', 'exento'];

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

    public function productos()
    {
        return $this->hasOne('App\Models\Admin\Productos');
    }
}