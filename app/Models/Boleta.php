<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactories;
use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    use HasFactory;
    protected $filiable = ['idInstitucion','numeroBoleta','fechaEmision','fechaVencimiento','montoPagar','idEstado','idUsuario'];
}