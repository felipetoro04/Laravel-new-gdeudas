<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Resources\UsuarioResource;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('id')->get();
        return UsuarioResource::collection($usuarios);
    }
    public function show(Usuario $usuario)
    {
        return new UsuarioResource($usuario);
    }
    public function validateRequest()
    {
        return request()->validate([
            'idTipoDoc' => 'required|integer|min:1',
            'numeroDoc '=> 'required|min:1|max:20',
            'nombre' => 'required|min:1|max:100',
            'idTipoSex' => 'required|integer|min:1',
            'edad' => 'required|integer|min:1',
            'email' => 'required|min:1|max:50',
            'contrasenia' => 'required|min:1|max:6',
            'idPerfil' => 'required|integer|min:1',
            'fechaCreacion' => 'required',   
            ]);
    }

    public function store()
    {
        $data = $this ->validateRequest();
        $usuario = Usuario::create($data);
        return new UsuarioResource($usuario);
    }

    public function update(Usuario $usuario)
    {
        $data = $this->validateRequest();
        $usuario->update($data);
        return new UsuarioResource($usuario);
    }
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return \response()->noContent();
    }
}