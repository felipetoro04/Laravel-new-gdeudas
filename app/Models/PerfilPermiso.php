<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactories;
use Illuminate\Database\Eloquent\Model;

class PerfilPermiso extends Model
{
    use HasFactory;
    protected $filiable = ['idPerfil','idPermisos'];
}