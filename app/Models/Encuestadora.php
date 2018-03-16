<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encuestadora extends Model
{
    protected $table = "encuestadoras";
    protected $fillable = ['encuestadora'];

    public function Cuentas()
    {
    	return $this->hasMany('App\Models\Cuenta');
    }

    public function Pais()
    {
    	return $this->belongsToMany('App\Models\Pais')->withTimestamps();
    }
}