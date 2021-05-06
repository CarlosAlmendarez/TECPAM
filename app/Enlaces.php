<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlaces extends Model
{
    protected $fillable=['nombre','enlace','categoria'];

    protected $table="enlaces";
}
