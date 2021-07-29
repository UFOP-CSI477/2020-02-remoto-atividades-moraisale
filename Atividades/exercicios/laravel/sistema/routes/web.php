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

use App\Models\Produto;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/todos', function () {
    $produtos = Produto::all();
    return view('produtos', ['dados' => $produtos]);
});

Route::get('/produtos/{id}', function ($id) {
    $produto = Produto::findOrFail($id);
    if ($produto == null) {
        return "ID inválido";
    }

    return $produto;
});
