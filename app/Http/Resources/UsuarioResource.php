<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
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
            'idTipoDoc'=> $this->idTipoDoc,
            'numeroDoc'=> $this->numeroDoc,
            'nombre'=> $this->nombre,
            'idTipoSex'=> $this->idTipoSex,
            'edad'=> $this->edad,
            'email'=> $this->email,
            'contrasenia'=> $this->contrasenia,
            'idPerfil'=> $this->idPerfil,
            'fechaCreacion'=> $this->fechaCreacion,                     
        ];
    }
}
