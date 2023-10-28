<?php

use  Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeneratorController;
/*
 *
 *
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function() {
    return view('welcome');
});

Route::get('/', function(){return view('home');})->name('home');


//////////////////////////////////////////////////// RUTA DE ACCESO A SITIOS VARIOS DENTRO DEL APLICATIVO
Route::controller(HomeController::class)->group(function (){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
});
//
////////////////////////////////////////////////////RUTAS DE ACCESO A LOS SITIOS

Route::controller(SiteController::class)->group(function (){
    Route::get('/sites', 'index')->name('sites.index')->middleware('auth');
    Route::put('/sites', 'store')->name('sites.store')->middleware('auth');
    Route::get('/sites/create', 'create')->name('sites.create')->middleware('auth');
    Route::put('/sites/search', 'search')->name('sites.search')->middleware('auth');
    Route::put('/sites/{site}', 'update')->name('sites.update')->middleware('auth');
    Route::get('/sites/{site}/edit', 'edit')->name('sites.edit')->middleware('auth');
    Route::delete('/sites/{site}', 'destroy')->name('sites.destroy')->middleware('auth');
});

//Route::resource('sites',SiteController::class)->middleware('auth');


/////////////////////////////////////////////////////////////////RUTAS DE ACCESO A LA AUTENTICACIÓN
Route::controller(AuthController::class)->group(function(){
    Route::post('/auth/log_out', 'log_out')->name('auth.log_out');
    Route::view('/auth/sign_in', 'auth.sign_in')->name('auth.form.sign_in')->middleware('guest');
    Route::post('/auth/sign_in/validate', 'sign_in')->name('auth.sign_in')->middleware('guest');
    Route::view('/auth/sign_up', 'auth.sign_up')->name('auth.form.sign_up')->middleware('guest');
    Route::post('/auth/sign_up/validate', 'sign_up')->name('auth.sign_up')->middleware('guest');
});
//
/////////////////////////////////////////////////////////////RUTAS DE ACCESO AL GENERADOR DE CONTRASEÑAS
Route::get('/generator', GeneratorController::class)->name('generator.index');
