<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
  protected $fillable=['id','nombre','precio','cantidad'];
}
