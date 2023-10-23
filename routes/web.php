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
//Route::get('/',function() {
//    return view('welcome');
//});

Route::get('/', function(){return view('home');})->name('home');
/// RUTA DE ACCESO A SITIOS VARIOS DENTRO DEL APLICATIVO
//Route::controller(HomeController::class)->group(function (){
//    Route::get('/', 'index')->name('home');
//    Route::get('/about', 'about')->name('about');
//});
//
///RUTAS DE ACCESO A LOS SITIOS
Route::controller(SiteController::class)->group(function (){
    Route::get('/sites', 'index')->name('sites.index');
    Route::put('/sites', 'save')->name('sites.save');
    Route::get('/sites/newsite', 'create')->name('sites.newsite');
//    Route::post('/sites/search', 'search')->name('sites.search');
    Route::put('/sites/{site}', 'update')->name('sites.update');
    Route::get('/sites/{site}/edit', 'edit')->name('sites.edit');
    Route::delete('/sites/{site}', 'destroy')->name('sites.destroy');
});


///RUTAS DE ACCESO A LA AUTENTICACIÓN
//Route::controller(AuthController::class)->group(function(){
//    Route::get('/auth/sign_in', 'sign_in')->name('auth.sign_in');
//    Route::get('/auth/sign_up', 'sign_up')->name('auth.sign_up');
//});

///RUTAS DE ACCESO AL GENERADOR DE CONTRASEÑAS
//Route::get('/generator', GeneratorController::class)->name('generator.index');
