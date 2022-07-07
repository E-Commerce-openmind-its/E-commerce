<?php

use App\Http\Controllers\DecosController;
use App\Http\Controllers\VetementsController;
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
    return view('women');
});
Route::resource('vetements', VetementsController::class);
Route::resource('decos', DecosController::class);

