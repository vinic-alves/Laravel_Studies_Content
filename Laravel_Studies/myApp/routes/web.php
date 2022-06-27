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

    $arr = [1, 2,3, 4, 5];
    $nomes = ["Mary", "Hanna", "Jessica", "Alexis"];


    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'proficao' => $proficao,
            'arr'    => $arr,
            'nomes'  => $nomes,
        ]);
});


Route::get('/contact', function () {
    return view('contact');
});



Route::get('/products', function(){

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});
// Parametro Obrigatório neste caso

Route::get('/products_test{id?}', function($id = null){
    return view('product', ['id' => $id]);
});
