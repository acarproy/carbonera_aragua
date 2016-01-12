<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Productos;

class ProductosCategorias extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos_categorias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'estatus'];

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
    public function productos()
    {
        return $this->hasMany('App\Models\Admin\Productos');
    }

    public function listProductosAsignados()
    {
        return $this->productos->lists('referencia', 'id');
    }
}