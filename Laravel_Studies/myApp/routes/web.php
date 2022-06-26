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

    $nome = "Vinicius";
    $idade = 27;
    $proficao = "Programador";


    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'proficao' => $proficao]);
});


Route::get('/contact', function () {
    return view('contact');
});



Route::get('/products', function(){
    return view('products');
});
