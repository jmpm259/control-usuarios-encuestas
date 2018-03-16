<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "paises";
    protected $fillable = ['pais'];

    public function Ciudades()
    {
    	return $this->hasMany('App\Models\Ciudad');
    }
    public function Encuestadoras()
    {
    	return $this->belongsToMany('App\Models\Encuestadora')->withTimestamps();
    }
}