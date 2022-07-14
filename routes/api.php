<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTareasController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ImagesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/projectsElements', [ProjectController::class,'index']); //muestra todos los registros
Route::post('/projectsElements', [ProjectController::class,'store']); // crea un registro
Route::put('/projectsElements/{id}', [ProjectController::class,'update']); // actualiza un registro
Route::delete('/projectsElements/{id}', [ProjectController::class,'destroy']); //elimina un registro


Route::get('/projectsTareas', [ProjectTareasController::class,'index']); //muestra todos los registros
Route::post('/projectsTareas', [ProjectTareasController::class,'store']); //muestra todos los registros
Route::put('projectsTareas/{id}', [ProjectTareasController::class,'update']); //muestra todos los registros
Route::delete('projectsTareas/{id}', [ProjectTareasController::class,'destroy']); //muestra todos los registros

Route::get('/projects', [ProjectsController::class,'index']); //muestra todos los registros
Route::post('/projects', [ProjectsController::class,'store']); //muestra todos los registros
Route::put('/projects/{id}', [ProjectsController::class,'update']); //muestra todos los registros
Route::delete('/projects/{id}', [ProjectsController::class,'destroy']); //muestra todos los registros

Route::get('/projectsImages', [ImagesController::class,'index']); //muestra todos los registros
Route::post('/projectsImages', [ImagesController::class,'store']); //muestra todos los registros
Route::put('/projectsImages/{id}', [ImagesController::class,'update']); //muestra todos los registros
Route::delete('/projectsImages/{id}', [ImagesController::class,'destroy']); //muestra todos los registros


Route::group([
    'middleware'=> 'api',
    'prefix' => 'auth'

], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
});
