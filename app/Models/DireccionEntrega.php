<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DireccionEntrega extends Model
{
    protected $fillable = ['id_pedido','id_alcaldia','id_ciudad','calle','num_int','num_ext','colonia','cp'];
}