  
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

use App\Http\Controllers\BoletaController;
use App\Http\Controllers\UsuarioController;



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
//    return view('welcome');
});
/*
Route::get('/parametros','ParametroController@index');
Route::get('/parametros/{parametro}','ParametroController@show');
Route::post('/parametros','ParametroController@store');
Route::put('/parametros/{parametro}','ParametroController@update');
Route::delete('/parametros/{parametro}','ParametroController@destroy');

Route::get('/perfiles','PerfilController@index');
Route::get('/perfiles/{perfil}','PerfilController@show');
Route::post('/perfiles','PerfilController@store');
Route::put('/perfiles/{perfil}','PerfilController@update');
Route::delete('/perfiles/{perfil}','PerfilController@destroy');

Route::get('/permisos','PermisoController@index');
Route::get('/permisos/{permiso}','PermisoController@show');
Route::post('/permisos','PermisoController@store');
Route::put('/permisos/{permiso}','PermisoController@update');
Route::delete('/permisos/{permiso}','PermisoController@destroy');

Route::get('/perfilPermisos','PerfilPermisoController@index');
Route::get('/perfilPermisos/{perfilPermiso}','PerfilPermisoController@show');
Route::post('/perfilPermisos','PerfilPermisoController@store');
Route::put('/perfilPermisos/{perfilPermiso}','PerfilPermisoController@update');
Route::delete('/perfilPermisos/{perfilPermiso}','PerfilPermisoController@destroy');
*/
Route::get('/usuarios','UsuarioController@index');
Route::get('/usuarios/{usuario}','UsuarioController@show');
Route::post('/usuarios','UsuarioController@store');
Route::put('/usuarios/{usuario}','UsuarioController@update');
Route::delete('/usuarios/{usuario}','UsuarioController@destroy');
/*
Route::get('/instituciones','InstitucionController@index');
Route::get('/instituciones/{institucion}','InstitucionController@show');
Route::post('/instituciones','InstitucionController@store');
Route::put('/instituciones/{institucion}','InstitucionController@update');
Route::delete('/instituciones/{institucion}','InstitucionController@destroy');

*/
Route::get('api/boletas','BoletaController@index');
Route::get('api/boletas/{boleta}','BoletaController@show');
Route::post('api/boletas','BoletaController@store');
Route::put('api/boletas/{boleta}','BoletaController@update');
Route::delete('api/boletas/{boleta}','BoletaController@destroy');
Auth::routes();

//Route::get('api/home', 'HomeController@index')->name('home');
