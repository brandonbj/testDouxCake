<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriaPrimaProducto extends Model
{
    protected $fillable = ['id_producto','id_materia_prima','cantidad'];
}
