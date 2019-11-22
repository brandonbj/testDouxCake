<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $fillable =['nombre','descripcion','fecha_ini','fecha_fin','img_promo'];
}
