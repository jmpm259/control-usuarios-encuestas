<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "personas";
    protected $fillable = ['nombre', 'apellido', 'fechanacimiento', 'telefono', 'email', 'password', 'user_id'];
}