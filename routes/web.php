<?php

use App\Http\Controllers\TelaPrincipalController;
use App\Http\Controllers\CadastroAtividadesController;
use App\Http\Controllers\CadastroTurmaController;
use App\Http\Controllers\CadastroProfessorController;
use App\Http\Controllers\CadastroAlunoController;
use App\Http\Controllers\CadastroSalaController;
use App\Http\Controllers\CadastroDisciplinaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('telaPrincipal');
});

//chamar pagina
Route::get('/telaPrincipal',[TelaPrincipalController::class, 'create'])->name('telaPrincipal');
Route::get('/CadastroTurma',[CadastroTurmaController::class, 'create'])->name('CadastroTurma');
Route::get('/CadastroAtividade',[CadastroAtividadesController::class, 'create'])->name('CadastroAtividade');
Route::get('/CadastroProfessor',[CadastroProfessorController::class, 'create'])->name('CadastroProfessor');
Route::get('/CadastroAluno',[CadastroAlunoController::class, 'create'])->name('CadastroAluno');
Route::get('/CadastroSala',[CadastroSalaController::class, 'create'])->name('CadastroSala');
Route::get('/CadastroDisciplina',[CadastroDisciplinaController::class, 'create'])->name('CadastroDisciplina');




