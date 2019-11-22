<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = ['id_alcaldia','id_ciudad','nombre','telefono','email','calle','num_int','num_ext','colonia','cp'];
}
