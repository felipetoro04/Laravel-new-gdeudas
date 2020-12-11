<?php

namespace App\Http\Controllers;


use App\Models\Boleta;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Resources\BoletaResource;
use App\Http\Resources\UsuarioResource;


class BoletaController extends Controller
{
    public function index()
    {
        $boletas = Boleta::orderBy('id')->get();
        return BoletaResource::collection($boletas);
    }
    public function show(Boleta $boleta)
    {
        return new BoletaResource($boletas);
    }
    public function validateRequest()
    {
        return request()->validate([
            'IdInstitucion'=> 'required|integer|min:1',
            'numeroBoleta'=> 'required|integer|min:1',
            'fechaEmision'=> 'required',
            'fechaVencimiento'=> 'required',
            'montoPagar'=> 'required|integer|min:1',
            'idEstado'=> 'required|integer|min:1',
            'idUsuario'=> 'required|integer|min:1',
        ]);
    }
    public function store()
    {
        $data = $this ->validateRequest();
        $boleta = Boleta::create($data);
        return new BoletaResource($boleta);
    }
    public function update(Boleta $boleta)
    {
        $data = $this->validateRequest();
        $boleta->update($data);
        return new BoletaResource($boletas);
    }
    public function destroy(Boleta $boleta)
    {
        $boleta->delete();
        return \response()->noContent();
    }
}