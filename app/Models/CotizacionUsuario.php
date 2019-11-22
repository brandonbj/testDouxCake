<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CotizacionUsuario extends Model
{
    protected $fillable = ['id_cotizacion','id_usuario'];
}
