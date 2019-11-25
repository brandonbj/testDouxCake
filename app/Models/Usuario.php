<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
   use Notifiable;
   protected $fillable =['id_ciudad','id_alcaldia','id_tipo_usuario','nombre','app','apm','telefono','nickname','email','calle','num_int','num_ext','colonia','cp','aviso_privacidad','password'];
    
   protected $hidden = [
        'password','remember_token'
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
