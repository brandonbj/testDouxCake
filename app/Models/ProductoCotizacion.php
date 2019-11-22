<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoCotizacion extends Model
{
    protected $fillable = ['id_producto','id_cotizacion','cantidad'];
}
