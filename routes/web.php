<?php

use App\Http\Controllers\TelaPrincipalController;
use App\Http\Controllers\CadastroAtividadesController;
use App\Http\Controllers\CadastroTurmaController;
use App\Http\Controllers\CadastroProfessorController;
use App\Http\Controllers\CadastroAlunoController;
use App\Http\Controllers\CadastroSalaController;
use App\Http\Controllers\CadastroDisciplinaController;

use App\Http\Controllers\VisualizarAtividadeController;
use App\Http\Controllers\VisualizarTurmaController;
use App\Http\Controllers\VisualizarProfessorController;
use App\Http\Controllers\VisualizarAlunoController;
use App\Http\Controllers\VisualizarSalaController;
use App\Http\Controllers\VisualizarDisciplinaController;
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

Route::get('/VisualizarTurma',[VisualizarTurmaController::class, 'create'])->name('VisualizarTurma');
Route::get('/VisualizarAtividade',[VisualizarAtividadeController::class, 'create'])->name('VisualizarAtividade');
Route::get('/VisualizarProfessor',[VisualizarProfessorController::class, 'create'])->name('VisualizarProfessor');
Route::get('/VisualizarAluno',[VisualizarAlunoController::class, 'create'])->name('VisualizarAluno');
Route::get('/VisualizarSala',[VisualizarSalaController::class, 'create'])->name('VisualizarSala');
Route::get('/VisualizarDisciplina',[VisualizarDisciplinaController::class, 'create'])->name('VisualizarDisciplina');




