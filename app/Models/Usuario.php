<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $fillable = ['usuario', 'password', 'status', 'encuestadora_id', 'persona_id', 'ciudad_id', 'direccion', 'codigopostal', 'user_id'];
}