<?php

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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobreNos');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('site.login');

// funcção de callback
Route::prefix('app')->group(function (){
    Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produtos'])->name('app.produtos');
});