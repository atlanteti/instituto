<?php

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/' , function(){
    return redirect('/login');
});
Route::get('/login', function () {
    return view('layouts/login');
});

Route::get('/senha1', function () {
    return view('layouts/senha1');
});

Route::get('/senha2', function () {
    return view('layouts/senha2');
});

Route::get('/senha3', function () {
    return view('layouts/senha3');
});

Route::get('/cadastro', function () {
    return view('layouts/cadastro');
});

Route::get('/vagas', function () {
    return view('layouts/vagas/vagas');
});

Route::get('/home', function () {
    return view('layouts/cadastro_cv/cadastro_cv');
});


Route::get('/treinamentos', function () {
    return view('layouts/treinamentos/treinamentos');
});
