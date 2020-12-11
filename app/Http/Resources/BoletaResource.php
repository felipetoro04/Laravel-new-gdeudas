<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BoletaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'IdInstitucion'=> $this->IdInstitucion,
            'numeroBoleta'=> $this->numeroBoleta,
            'fechaEmision'=> $this->fechaEmision,
            'fechaVencimiento'=> $this->fechaVencimiento,
            'montoPagar'=> $this->montoPagar,
            'idEstado'=> $this->idEstado,
            'idUsuario'=> $this->idUsuario,                       
        ];
    }
}