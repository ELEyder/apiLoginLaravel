<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::controller(ApiController::class)->group(function(){
    Route::get('/', 'index')->name('/');
    Route::get('cines', 'cines')->name('cines');
    Route::get('cines/{id}', 'cine')->name('cine');
    Route::get('cines/{id}/tarifas', 'cineTarifas')->name('cineTarifas');
    Route::get('cines/{id}/peliculas', 'cinePeliculas')->name('cinePeliculas');
    Route::get('peliculas/{id?}', 'peliculas')->name('peliculas');
});