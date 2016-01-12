<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\User;
use App\Models\Admin\Pedidos;

class Clientes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clientes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['razon', 'rif', 'exento', 'telefono', 'telefono2', 'direccion', 'correo', 'estado_id', 'ciudad_id', 'estatus'];


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
    public function users()
    {
        return $this->belongsToMany('App\Models\Admin\User');
    }

    public function pedidos()
    {
        return $this->hasMany('App\Models\Admin\Pedidos');
    }

    public function listUsers()
    {
        return User::lists('username', 'id')->toArray();
    }

    public function listUserAsignados()
    {
        return $this->users->lists('username', 'id');
    }
}