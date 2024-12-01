<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('index');
//});

//volanie pomocou reflexie - ":: class"
Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);


Route::get('/detail/{id}', [\App\Http\Controllers\Controller::class, 'detail']);

Route::get('/stalice', [\App\Http\Controllers\Controller::class, 'stalice']);

Route::get('/pridat', [\App\Http\Controllers\Controller::class, 'pridat']);

Route::get('/api/credentials', [\App\Http\Controllers\ValidationController::class, 'authorize']);





