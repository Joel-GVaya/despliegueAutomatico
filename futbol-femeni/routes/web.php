<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartitsController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
 });


 Route::resource('/equips', EquipController::class);

 Route::resource('/estadis', EstadiController::class);
 
 Route::resource('/jugadors', JugadoresController::class);

 Route::resource('/partits', PartitsController::class);