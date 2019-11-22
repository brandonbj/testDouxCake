<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoPromocion extends Model
{
    protected $fillable =['id_producto','id_promocion','descuento'];
}
