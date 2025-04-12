<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\trataAlunoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contato', [ContatoController::class, 'index']);

Route::get('/aluno/{nomeAluno?}', [trataAlunoController::class, 'index']);

