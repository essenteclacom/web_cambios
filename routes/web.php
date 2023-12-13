<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------*/

//ESP routes
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NormativasController;
use App\Http\Controllers\EspController;
Route::get('/', DefaultController::class);
Route::get('/inicio', InicioController::class);
Route::get('/normativas', NormativasController::class);
Route::get('/esp', EspController::class);

//ENG routes
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegulationsController;
use App\Http\Controllers\EngController;
Route::get('/home', HomeController::class);
Route::get('/regulations', RegulationsController::class);
Route::get('/eng', EngController::class);

//FORM routes
use App\Http\Controllers\ContactController;
Route::post('/contact', ContactController::class);
