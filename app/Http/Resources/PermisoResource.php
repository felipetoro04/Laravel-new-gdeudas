<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PermisoResource extends JsonResource
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
            'tipo'=> $this->tipo,
            'codigo'=> $this->codigo,
            'descripcion'=> $this->descripcion,
            'valor'=> $this->valor, 
        ];
    }
}