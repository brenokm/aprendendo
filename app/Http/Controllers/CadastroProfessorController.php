<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Disciplina;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CadastroProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $disciplinas = Disciplina::all();
        $professores = Professor::all();
        
        return view('telaCadastroProfessor', ['disciplinas' => $disciplinas, 'professores' => $professores]);
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->usuario_nome =  $request->input('loginprofessor');
        $usuario->usuario_senha=  $request->input('senhaprofessor');
        $usuario->save();

        $idusuario = $usuario->usuario_id;

        $professor = new Professor();
        $professor->usuario_id =$idusuario; 
        $professor->disciplina_id =$request->disciplina_id; 
        $professor->professor_nome = $request->input('professor_nome');
        $professor->save();
       
        return redirect()->route('visualizar.professor');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $usuarios=Usuario::all();
        $professores = Professor::all();
        return view('TelaVisualizarProfessor', ['professores' => $professores, 'usuarios'=>$usuarios]);
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
        $professor = Professor::findOrFail($id);
        $professor->delete();

        return Redirect::route('visualizar.professor');
    }
}
