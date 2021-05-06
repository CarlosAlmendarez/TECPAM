<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected $fillable=['titulo','texto','duracion','categoria'];

    protected $table="datos";
}
