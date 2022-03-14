<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

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

Route::get('/animal', [AnimalController::class, 'index']);
Route::get('/animal/create', [AnimalController::class, 'create']);
Route::post('animal/store', [AnimalController::class, 'store']);
Route::delete('animal/delete/{id}', [AnimalController::class, 'destroy']);
Route::get('/show/{id}', [AnimalController::class, 'show']);

Route::get('/edit/{id}', [AnimalController::class, 'edit']);
Route::put('/update/{id}', [AnimalController::class, 'update']);