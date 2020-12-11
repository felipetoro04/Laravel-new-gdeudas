<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactories;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $filiable = ['idTipoDoc','numeroDoc','nombre','idTipoSex','edad','email','contrasenia','idPerfil','fechaCreacion'];
}