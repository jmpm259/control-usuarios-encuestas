<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cobro extends Model
{
    protected $table = "cobros";
    protected $fillable = ['cobro','usuario_id'];

    public function Usuario()
    {
    	return $this->belongsTo('App\Models\Usuario');
    }
}