<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "Bienvenidos a mi pagina desde laravel Primera vez";
});

Route::get("/games",[GameController::class,"index"]);
Route::get("/games/create",[GameController::class,"create"]);
Route::get("/games/{name_game}/{categoria?}",[GameController::class,"decision"]);

