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

Route::get('/', function () {
    return view('store/storeIndex', ['title' => 'Home']);
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/requisitos', function (){
    return view('store/storeRequirements', ['title' => 'Requisitos']);
});

Route::get('/tuEspacio', function (){
    return view('store/userAbstract', ['title' => 'Tu Espacio']);
});