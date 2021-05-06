<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $fillable=['nombre','duracion','calificaicon','enlace','categoria'];

    protected $table="videos";
}
