<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Clientes;

class VenCiudades extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ven_ciudades';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ciudad', 'id_estado', 'ciudad'];

    /**
     * many-to-many relationship method.
     *
     * @return QueryBuilder
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Admin\Clientes');
    }
}