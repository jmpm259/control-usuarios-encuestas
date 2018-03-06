<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "personas";
    protected $fillable = ['nombre', 'apellido', 'fechanacimiento', 'telefono', 'email', 'password', 'user_id'];

    public function Cuentas()
    {
    	return $this->hasMany('App\Models\Cuenta');
    }

    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}