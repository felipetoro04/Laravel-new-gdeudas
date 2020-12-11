  
<?php

use App\Models\Parametro;
use App\Models\Perfil;
use App\Models\Permiso;
use App\Models\PerfilPermiso;
use App\Models\Usuario;
use App\Models\Institucion;
use App\Models\Boleta;


use Illuminate\Support\Facades\Route;

use App\Http\Resources\ParametroResource;
use App\Http\Resources\PerfilResource;
use App\Http\Resources\PermisoResource;
use App\Http\Resources\PerfilPermisoResource;
use App\Http\Resources\UsuarioResource;
use App\Http\Resources\InstitucionResource;
use App\Http\Resources\BoletaResource;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/parametros','ParametroContoller@index');
Route::get('/parametros/{parametro}','ParametroContoller@show');
Route::get('/parametros','ParametroContoller@store');
Route::put('/parametros/{parametro}','ParametroContoller@update');
Route::delete('/parametros/{parametro}','ParametroContoller@destroy');

Route::get('/perfiles','PerfilContoller@index');
Route::get('/perfiles/{perfil}','PerfilContoller@show');
Route::get('/perfiles','PerfilContoller@store');
Route::put('/perfiles/{perfil}','PerfilContoller@update');
Route::delete('/perfiles/{perfil}','PerfilContoller@destroy');

Route::get('/permisos','PermisoContoller@index');
Route::get('/permisos/{permiso}','PermisoContoller@show');
Route::get('/permisos','PermisoContoller@store');
Route::put('/permisos/{permiso}','PermisoContoller@update');
Route::delete('/permisos/{permiso}','PermisoContoller@destroy');

Route::get('/perfilPermisos','PerfilPermisoContoller@index');
Route::get('/perfilPermisos/{perfilPermiso}','PerfilPermisoContoller@show');
Route::get('/perfilPermisos','PerfilPermisoContoller@store');
Route::put('/perfilPermisos/{perfilPermiso}','PerfilPermisoContoller@update');
Route::delete('/perfilPermisos/{perfilPermiso}','PerfilPermisoContoller@destroy');

Route::get('/usuarios','UsuarioContoller@index');
Route::get('/usuarios/{usuario}','UsuarioContoller@show');
Route::get('/usuarios','UsuarioContoller@store');
Route::put('/usuarios/{usuario}','UsuarioContoller@update');
Route::delete('/usuarios/{usuario}','UsuarioContoller@destroy');

Route::get('/instituciones','InstitucionContoller@index');
Route::get('/instituciones/{institucion}','InstitucionContoller@show');
Route::get('/instituciones','InstitucionContoller@store');
Route::put('/instituciones/{institucion}','InstitucionContoller@update');
Route::delete('/instituciones/{institucion}','InstitucionContoller@destroy');


Route::get('/boletas','BoletaContoller@index');
Route::get('/boletas/{boleta}','BoletaContoller@show');
Route::get('/boletas','BoletaContoller@store');
Route::put('/boletas/{boleta}','BoletaContoller@update');
Route::delete('/boletas/{boleta}','BoletaContoller@destroy');