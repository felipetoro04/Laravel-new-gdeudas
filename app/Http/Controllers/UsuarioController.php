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
            'idTipoDoc' => 'required',
            'numeroDoc '=> 'required',
            'nombre' => 'required',
            'idTipoSex' => 'required',
            'edad' => 'required',
            'email' => 'required',
            'contrasenia' => 'required',
            'idPerfil' => 'required',
             
            ]);
    }

    public function store()
    {
        $data = request()->all();
        $usuario = Usuario::create($data);
        return new UsuarioResource($usuario);
    }

    public function update(Usuario $usuario)
    {
        $data = request()->all();
        $usuario->update($data);
        return new UsuarioResource($usuario);
    }
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->noContent();
    }

    public function auth()
    {  
        
        $request = request()->all();

        $usuario = Usuario::where('email', $request['email'])->where('contrasenia', $request['contrasenia'])->first();

        if($usuario!= null){
            return $usuario;
        }else{
            return response()->noContent();
        }

       
    }
}