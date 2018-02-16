<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "personas";
    protected $fillable = ['nombre', 'apellido', 'fechanacimiento', 'telefono', 'email', 'password', 'user_id'];

    public function Usuarios()
    {
    	return $this->hasMany('App\Models\Usuario');
    }

    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}