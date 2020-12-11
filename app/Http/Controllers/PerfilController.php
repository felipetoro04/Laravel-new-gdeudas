<?php
namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use App\Http\Resources\PerfilResource;

class PerfilController extends Controller
{
    public function index()
    {
        $perfiles = Perfil::orderBy('id')->get();
        return PerfilResource::collection($perfiles);
    }
    public function show(Perfil $perfil)
    {
        return new PerfilResource($perfil);
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
        $perfil = Perfil::create($data);
        return new PerfilResource($perfil);
    }

    public function update(Perfil $perfil)
    {
        $data = $this->validateRequest();
        $perfil->update($data);
        return new PerfilResource($perfil);
    }
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return \response()->noContent();
    }
}
