<?php
namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;
use App\Http\Resources\PermisoResource;

class PermisoController extends Controller
{
    public function index()
    {
        $permisos = Permiso::orderBy('id')->get();
        return PermisoResource::collection($permisos);
    }
    public function show(Permiso $permiso)
    {
        return new PermisoResource($permiso);
    }
    public function validateRequest()
    {
        return request()->validate([
            'tipo'=> 'required|min:1|max:10',
            'codigo'=> 'required|min:1|max:10',
            'descripcion'=> 'required|min:1|max:50',
            'valor'=> 'required|min:1|max:10',
        ]);
    }

    public function store()
    {
        $data = $this ->validateRequest();
        $permiso = Permiso::create($data);
        return new PermisoResource($permiso);
    }

    public function update(Permiso $permiso)
    {
        $data = $this->validateRequest();
        $permiso->update($data);
        return new PermisoResource($permiso);
    }
    public function destroy(Permiso $permiso)
    {
        $permiso->delete();
        return \response()->noContent();
    }
}