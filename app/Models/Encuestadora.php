<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encuestadora extends Model
{
    protected $table = "encuestadoras";
    protected $fillable = ['encuestadora','cobro'];
}