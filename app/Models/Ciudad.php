<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudades";
    protected $fillable = ['ciudad','pais_id'];

    public function Cuentas()
    {
    	return $this->hasMany('App\Models\Cuenta');
    }

    public function Pais()
    {
    	return $this->belongsTo('App\Models\Pais');
    }
}