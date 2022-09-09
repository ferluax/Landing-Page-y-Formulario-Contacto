<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is we loaded by the RouteServiceProvider within a group which
| conhere you can register web routes for your application. These
| routes artains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/landingpage', [PaginaController::class, 'landingpage']);

Route::get('/contacto/{version_id?}', [PaginaController::class, 'contacto']);

/*Route::get('/contacto/{version_id?}', function ($version_id = null) {

    $versiones = 1234;

    if (!empty($version_id)){
        $version = $versiones;
    } else{
        $version = null;
    }

    return view('contacto', compact('versiones', 'version'));
});*/

