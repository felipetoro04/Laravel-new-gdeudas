<?php
namespace App\Http\Controllers;

use App\Models\PerfilPermiso;
use Illuminate\Http\Request;
use App\Http\Resources\PerfilPermisoResource;

class PerfilPermisoController extends Controller
{
    public function index()
    {
        $perfilpermisos = PerfilPermiso::orderBy('id')->get();
        return PerfilPermisoResource::collection($perfilpermisos);
    }
    public function show(PerfilPermiso $perfilpermiso)
    {
        return new PerfilPermisoResource($perfilpermiso);
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
        $perfilpermiso = PerfilPermiso::create($data);
        return new PerfilPermisoResource($perfilpermiso);
    }

    public function update(PerfilPermiso $perfilpermiso)
    {
        $data = $this->validateRequest();
        $perfilpermiso->update($data);
        return new PerfilPermisoResource($perfilpermiso);
    }
    public function destroy(PerfilPermiso $perfilpermiso)
    {
        $perfilpermiso->delete();
        return \response()->noContent();
    }
}