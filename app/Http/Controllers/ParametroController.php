<?php
namespace App\Http\Controllers;

use App\Models\Parametro;
use Illuminate\Http\Request;
use App\Http\Resources\ParametroResource;

class ParametroController extends Controller
{
    public function index()
    {
        $parametros = Parametro::orderBy('id')->get();
        return ParametroResource::collection($parametros);
    }
    public function show(Parametro $parametro)
    {
        return new ParametroResource($parametro);
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
        $parametro = Parametro::create($data);
        return new ParametroResource($parametro);
    }

    public function update(Parametro $parametro)
    {
        $data = $this->validateRequest();
        $parametro->update($data);
        return new ParametroResource($parametro);
    }
    public function destroy(Parametro $parametro)
    {
        $parametro->delete();
        return \response()->noContent();
    }
}
