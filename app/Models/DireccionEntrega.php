<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DireccionEntrega extends Model
{
    protected $fillable['calle','num_int','num_ext','colonia','cp'];
}