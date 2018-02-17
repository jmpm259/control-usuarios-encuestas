<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    protected $table = "puntos";
    protected $fillable = ['puntos','descripcion','usuario_id'];

    public function Usuarios()
    {
    	return $this->belongsTo('App\Models\Usuarios');
    }
}