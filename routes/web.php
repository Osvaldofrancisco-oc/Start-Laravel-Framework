<?php

use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
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
    // Route::get('/', function(){
    //     return view('layouts.base');
    // });


    // Route::namespace('Site')->group(function(){
    //     Route::get('/',[HomeController::class,'__invoke'])->name('/');
    //     Route::get('/home',[HomeController::class,'index'])->name('home');
 
    //     Route::get('/servico',[SobreController::class,'__invoke'])->name('sobre');

    //     Route::get('/contacto',[ContactController::class,'index'])->name('contacto');

    //     Route::get('/Login',[AuthController::class, 'login'])->name('login');
    //     Route::post('/Login',[AuthController::class, 'loginPost'])->name('login');

    //     Route::get('/register',[AuthController::class, 'register'])->name('register');
    //     Route::post('/registerPost',[AuthController::class, 'registerPost'])->name('register');

    //     Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    // });



Route::group(['middleware'=>'guest'], function(){
   
    Route::namespace('Site')->group(function(){
    Route::get('/',[HomeController::class,'__invoke'])->name('/');

    Route::get('/servico',[SobreController::class,'__invoke'])->name('sobre');

    Route::get('/contacto',[ContactController::class,'index'])->name('contacto');

    Route::get('/Login',[AuthController::class, 'login'])->name('login');
    Route::post('/Login',[AuthController::class, 'loginPost'])->name('login');

    Route::get('/register',[AuthController::class, 'register'])->name('register');
    Route::post('/registerPost',[AuthController::class, 'registerPost'])->name('register');
});

});


Route::group(['middleware'=>'auth'], function(){

    Route::namespace('Site')->group(function(){

    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

});

});