<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','address','phone','phone2','email'];


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
}