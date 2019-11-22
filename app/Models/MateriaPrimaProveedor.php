<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriaPrimaProveedor extends Model
{
    protected $fillable = ['id_proveedor','id_materia_prima','cantidad'];
}
