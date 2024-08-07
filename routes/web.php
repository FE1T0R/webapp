<?php

use  Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeneratorController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

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
//Route::view('/', function(){return view('home');})->name('home');


//////////////////////////////////////////////////// RUTA DE ACCESO A SITIOS VARIOS DENTRO DEL APLICATIVO
Route::controller(HomeController::class)->group(function (){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
});
//
////////////////////////////////////////////////////RUTAS DE ACCESO A LOS SITIOS

Route::controller(SiteController::class)->group(function (){
    Route::get('/sites', 'index')->name('sites.index')->middleware(['auth','verified']);
    Route::put('/sites', 'store')->name('sites.store')->middleware('auth');
    Route::get('/sites/create', 'create')->name('sites.create')->middleware('auth');
    Route::put('/sites/search', 'search')->name('sites.search')->middleware('auth');
    Route::put('/sites/{site}', 'update')->name('sites.update')->middleware('auth.session');
    Route::get('/sites/edit/{site}', 'edit')->name('sites.edit')->middleware('auth.session');
    Route::delete('/sites/{site}', 'destroy')->name('sites.destroy')->middleware('auth.session');
});

//Route::resource('sites',SiteController::class)->middleware('auth');


/////////////////////////////////////////////////////////////////RUTAS DE ACCESO A LA AUTENTICACIÓN
Route::controller(AuthController::class)->group(function(){
    Route::post('/auth/log_out', 'log_out')->name('auth.log_out');
    Route::view('/auth/sign_in', 'auth.sign_in')->name('auth.form.sign_in')->middleware('guest');
    Route::get('/auth/recover_pass', 'recover')->name('auth.form.recover_pass')->middleware('guest');
    Route::post('/auth/sign_in/validate', 'sign_in')->name('auth.sign_in')->middleware('guest');
    Route::view('/auth/sign_up', 'auth.sign_up')->name('auth.form.sign_up')->middleware('guest');
    Route::post('/auth/sign_up/validate', 'sign_up')->name('auth.sign_up')->middleware('guest');
    Route::get('/email/verify', 'emailNotification')->middleware('auth')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'emailVerification')->middleware(['auth', 'signed'])->name('verification.verify');
    Route::post('/email/verification-notification', 'resendEmailVerification')->middleware(['auth', 'throttle:6,1'])->name('verification.send');


});




//Route::get('/recover_pass', [AuthController::class, 'recover'])->name('auth.form.recover_pass')->middleware('guest');
//Route::view('/', function(){return view('home');})->name('home');

/////////////////////////////////////////////////////////////RUTAS DE ACCESO AL GENERADOR DE CONTRASEÑAS

Route::controller(GeneratorController::class)->group(function(){
Route::get('/generator', 'index')->name('generator.index');
Route::get('/{site}/generator', 'editPass')->name('generator.editPass');
Route::get('/generator/create', 'createPass')->name('generator.createPass');
Route::put('/generator/create', 'create')->name('generator.create');
Route::put('/generator/show', 'show')->name('generator.show');
});
//Route::current('',);
