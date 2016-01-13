<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\User;
use App\Models\Admin\Pedidos;
use App\Models\Admin\VenEstados;
use App\Models\Admin\VenCiudades;

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
    protected $fillable = ['razon', 'rif', 'exento', 'telefono', 'telefono2', 'direccion', 'correo', 'estado_id', 'ciudad_id', 'estatus', 'user_id'];


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
        return $this->belongsTo('App\Models\Admin\User');
    }

    public function pedidos()
    {
        return $this->hasMany('App\Models\Admin\Pedidos');
    }

    public function venEstados()
    {
        return $this->belongsTo('App\Models\Admin\VenEstados');
    }

    public function venCiudades()
    {
        return $this->belongsTo('App\Models\Admin\VenCiudades');
    }

    public function listUsers()
    {
        $ex = User::
              join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->where('role_title','=','Cliente')
            ->where('active','=','1')
            ->has('clientes', '<', 1)
            ->get(['users.*'])
            ->lists('username', 'id')->toArray();
        $ac = User::where('id','=',$this->user_id)->lists('username', 'id')->toArray();

        return $ex + $ac;
    }

    public function listUsersAssigned()
    {
        return $this->users->lists('username', 'id');
    }
}