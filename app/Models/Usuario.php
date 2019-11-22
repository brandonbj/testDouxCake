<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   protected $fillable =['id_ciudad','id_alcaldia','id_tipo_usuario','nombre','app','apm','telefono','nickname','email','calle','num_int','num_ext','coloia','cp','aviso_privacidad'];
   protected $hidden = ['password'];
}
