<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contro;
use App\Http\Controllers\HeladeriaController;
use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\CursoController;
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
Route::resource('curso', CursoController::class);




Route::get('/', function () {
    return view('cursos.bienvenido');
});

Route::get('/cursos/nosotros', function () {
    return view('cursos.nosotros');
});

Route::get('miruta', function () {
    return 'Estoy en Laravel';
});
//los parametros van entre llaves
Route::get('/minombre/{nombre}', function ($nombre) {
    return 'SIUUUUUUUUUUUUUUUUUU '. $nombre;
});

route::get('/suma/{a}/{b}', function ($a,$b){
    $sum = $a + $b;
    return 'la suma de a + b: ' .$sum ;
});
/*menciono la clase y el metodo como un array
debo usar la palabras reservada class
el metodo va entre comillas simple
*/
Route::get('/rutamulti/{a}/{b}',[Contro::class,'multipli']);

Route::get('/helado/{a}',[HeladeriaController::class,'totalHelado']);

Route::get('/precio/{a}',[ControladorPrecios::class,'Precios']);

Route::get('/iva/{a}/{b}',[ControladorPrecios::class,'getIVA']);


