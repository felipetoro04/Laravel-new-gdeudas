<?php
namespace App\Http\Controllers;

use App\Models\PerfilPermiso;
use Illuminate\Http\Request;
use App\Http\Resources\PerfilPermisoResource;

class PerfilPermisoController extends Controller
{
    public function index()
    {
        $perfilPermisos = PerfilPermiso::orderBy('id')->get();
        return PerfilPermisoResource::collection($perfilPermisos);
    }
    public function show(PerfilPermiso $perfilPermiso)
    {
        return new PerfilPermisoResource($perfilPermiso);
    }
    public function validateRequest()
    {
        return request()->validate([
            'idPerfil'=> 'required|integer|min:1',
            'idPermiso'=> 'required|integer|min:1',  
         ]);
    }

    public function store()
    {
        $data = $this ->validateRequest();
        $perfilPermiso = PerfilPermiso::create($data);
        return new PerfilPermisoResource($perfilPermiso);
    }

    public function update(PerfilPermiso $perfilPermiso)
    {
        $data = $this->validateRequest();
        $perfilPermiso->update($data);
        return new PerfilPermisoResource($perfilPermiso);
    }
    public function destroy(PerfilPermiso $perfilPermiso)
    {
        $perfilPermiso->delete();
        return \response()->noContent();
    }
}