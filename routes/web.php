<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;




Route::get('/', [HomeController::class,'home']);
Route::get('/produtos', [ProdutosController::class,'index'])->name('produtos.index');
Route::get('/detalhesprodutos/{id}', [ProdutosController::class, 'show'])->name('produtos.show');




