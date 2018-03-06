<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    protected $table = "puntos";
    protected $fillable = ['puntos','descripcion','cuenta_id'];

    public function Cuentas()
    {
    	return $this->belongsTo('App\Models\Cuenta');
    }
}