<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    protected $table = "ip";
    protected $fillable = ['ip','status'];

    public function Cuentas()
    {
    	return $this->belongsToMany('App\Models\Cuenta')->withTimestamps();
    }
}