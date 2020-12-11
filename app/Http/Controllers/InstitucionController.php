<?php
namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;
use App\Http\Resources\InstitucionResource;

class InstitucionController extends Controller
{
    public function index()
    {
        $instituciones = Institucion::orderBy('id')->get();
        return InstitucionResource::collection($instituciones);
    }
    public function show(Institucion $institucion)
    {
        return new InstitucionResource($institucion);
    }
    public function validateRequest()
    {
        return request()->validate([
            'razonSocial' => 'required|min:1|max:100',
            'idTipoDoc' => 'required|integer|min:1',
            'numeroDoc '=> 'required|min:1|max:20',                     
            ]);
    }

    public function store()
    {
        $data = $this ->validateRequest();
        $institucion = Institucion::create($data);
        return new InstitucionResource($institucion);
    }

    public function update(Institucion $institucion)
    {
        $data = $this->validateRequest();
        $institucion->update($data);
        return new InstitucionResource($institucion);
    }
    public function destroy(Institucion $institucion)
    {
        $institucion->delete();
        return \response()->noContent();
    }
}