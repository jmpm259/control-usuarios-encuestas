<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cobro extends Model
{
    protected $table = "cobros";
    protected $fillable = ['cobro','cuenta_id'];

    public function Cuenta()
    {
    	return $this->belongsTo('App\Models\Cuenta');
    }
}