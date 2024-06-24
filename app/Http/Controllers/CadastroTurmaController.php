<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Turma;
use App\Models\Sala;
use App\Models\Disciplina;
use App\Models\Professor;

use Illuminate\Http\Request;

class CadastroTurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  
    {
       

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $disciplinas = Disciplina::all();
        $professores = Professor::all();
        $cursos=Curso::all();
        $salas=Sala::all();
        return view('telaCadastroTurma', ['disciplinas' => $disciplinas, 'professores' => $professores,
        'cursos'=>$cursos, 'salas'=>$salas]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $turma = new Turma(); 
        $turma->turma_nome=$request->input('nometurma');
        $turma->professor_id=$request->professor_id;
        $turma->curso_id=$request->curso_id;
        $turma->sala_id=$request->sala_id;
        $turma->save();

        return redirect()->route('visualizar.turma');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('telaVisualizarTurma');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
