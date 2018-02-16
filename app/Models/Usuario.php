<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $fillable = ['usuario', 'password', 'status', 'encuestadora_id', 'persona_id', 'ciudad_id', 'direccion', 'codigopostal', 'user_id'];

    public function Cobros()
    {
    	return $this->hasMany('App\Models\Cobro');
    }

    public function Puntos()
    {
    	return $this->hasMany('App\Models\Punto');
    }

    public function Encuestadora()
    {
    	return $this->belongsTo('App\Models\Encuestadora');
    }

    public function Persona()
    {
    	return $this->belongsTo('App\Models\Persona');
    }

    public function Ciudad()
    {
    	return $this->belongsTo('App\Models\Ciudad');
    }

    public function User()
    {
    	return $this->belongsTo('App\User');
    }

    public function Ip()
    {
    	return $this->belongsToMany('App\Models\Ip')->withTimestamps();
    }
}