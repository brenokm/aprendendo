<?php

use App\Http\Controllers\TelaPrincipalController;
use App\Http\Controllers\CadastroAtividadesController;
use App\Http\Controllers\CadastroTurmaController;
use App\Http\Controllers\CadastroProfessorController;
use App\Http\Controllers\CadastroAlunoController;
use App\Http\Controllers\CadastroSalaController;
use App\Http\Controllers\CadastroCursoController;
use App\Http\Controllers\CadastroDisciplinaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('telaPrincipal');
});

// //chamar pagina
// Route::get('/telaPrincipal',[TelaPrincipalController::class, 'create'])->name('telaPrincipal');


//TURMA
Route::get('/CadastroTurma',[CadastroTurmaController::class, 'create'])->name('CadastroTurma');
Route::post('/CriarTurma',[CadastroTurmaController::class, 'store'])->name('criar.turma');
Route::get('/CriarTurma',[CadastroTurmaController::class, 'show'])->name('visualizar.turma');
Route::delete('deletar/{turma_id}/DeletarTurma',[CadastroTurmaController::class, 'destroy'])->name('deletar.turma');
Route::put('/AtualizarTurma',[CadastroTurmaController::class, 'update'])->name('atualizar.turma');
Route::get('/editar/{turma_id}/EditarTurma',[CadastroTurmaController::class, 'edit'])->name('editar.turma');


//ATIVIDADE
Route::get('/CadastroAtividade',[CadastroAtividadesController::class, 'create'])->name('CadastroAtividade');
Route::post('/CriarAtividade',[CadastroAtividadesController::class, 'store'])->name('criar.atividade');
Route::get('/CriarAtividade',[CadastroAtividadesController::class, 'show'])->name('visualizar.atividade');
Route::delete('deletar/{atividade_id}/DeletarAtividade',[CadastroAtividadesController::class, 'destroy'])->name('deletar.atividade');
Route::put('/AtualizarAtividade',[CadastroAtividadesController::class, 'update'])->name('atualizar.atividade');
Route::get('/editar/{atividade_id}/EditarAtividade',[CadastroAtividadesController::class, 'edit'])->name('editar.atividade');

//PROFESSOR
Route::get('/CadastroProfessor',[CadastroProfessorController::class, 'create'])->name('CadastroProfessor');
Route::post('/CriarProfessor',[CadastroProfessorController::class, 'store'])->name('criar.professor');
Route::get('/CriarProfessor',[CadastroProfessorController::class, 'show'])->name('visualizar.professor');
Route::delete('deletar/{professor_id}/DeletarProfessor',[CadastroProfessorController::class, 'destroy'])->name('deletar.professor');
Route::put('/AtualizarProfessor',[CadastroProfessorController::class, 'update'])->name('atualizar.professor');
Route::get('/editar/{professor_id}/EditarProfessor',[CadastroProfessorController::class, 'edit'])->name('editar.professor');

//ALUNO
Route::get('/CadastroAluno',[CadastroAlunoController::class, 'create'])->name('CadastroAluno');
Route::post('/CriarAluno',[CadastroAlunoController::class, 'store'])->name('criar.aluno');
Route::get('/CriarAluno',[CadastroAlunoController::class, 'show'])->name('visualizar.aluno');
Route::delete('deletar/{aluno_id}/DeletarAluno',[CadastroAlunoController::class, 'destroy'])->name('deletar.aluno');
Route::put('/AtualizarAluno',[CadastroAlunoController::class, 'update'])->name('atualizar.aluno');
Route::get('/editar/{aluno_id}/EditarAluno',[CadastroAlunoController::class, 'edit'])->name('editar.aluno');

//CURSOS
Route::get('/CadastroCurso',[CadastroCursoController::class, 'create'])->name('CadastroCurso');
Route::post('/CriarCurso',[CadastroCursoController::class, 'store'])->name('criar.curso');
Route::get('/VisualizarCurso',[CadastroCursoController::class, 'show'])->name('visualizar.curso');
Route::delete('deletar/{curso_id}/DeletarCurso',[CadastroCursoController::class, 'destroy'])->name('deletar.curso');
Route::put('/AtualizarCurso',[CadastroCursoController::class, 'update'])->name('atualizar.curso');
Route::get('/editar/{curso_id}/EditarCurso',[CadastroCursoController::class, 'edit'])->name('editar.curso');



//DISCIPLINA
Route::get('/CadastroDisciplina',[CadastroDisciplinaController::class, 'create'])->name('CadastroDisciplina');
Route::post('/CriarDisciplina',[CadastroDisciplinaController::class, 'store'])->name('criar.disciplina');
Route::get('/CriarDisciplina',[CadastroDisciplinaController::class, 'show'])->name('visualizar.disciplina');
Route::delete('deletar/{disciplina_id}/DeletarDisciplina',[CadastroDisciplinaController::class, 'destroy'])->name('deletar.disciplina');
Route::put('/AtualizarDisciplina',[CadastroDisciplinaController::class, 'update'])->name('atualizar.disciplina');
Route::get('/editar/{disciplina_id}/EditarDisciplina',[CadastroDisciplinaController::class, 'edit'])->name('editar.disciplina');

//SALA
Route::get('/CadastroSala',[CadastroSalaController::class, 'create'])->name('CadastroSala');
Route::post('/CriarSala',[CadastroSalaController::class, 'store'])->name('criar.sala');
Route::get('/Criarsala',[CadastroSalaController::class, 'show'])->name('visualizar.sala');
Route::delete('deletar/{sala_id}/DeletarSala',[CadastroSalaController::class, 'destroy'])->name('deletar.sala');
Route::put('/Atualizarsala',[CadastroSalaController::class, 'update'])->name('atualizar.sala');
Route::get('/editar/{sala_id}/EditarSala',[CadastroSalaController::class, 'edit'])->name('editar.sala');







