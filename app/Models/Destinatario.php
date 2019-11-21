<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinatario extends Model
{
    protected $fillable ['num_pedido','nombre','app','apm','email','telefono'];
}
