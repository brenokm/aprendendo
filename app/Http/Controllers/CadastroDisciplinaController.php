<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Disciplina;
use Illuminate\Support\Facades\Redirect;

class CadastroDisciplinaController extends Controller
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
        return view('telaCadastroDisciplina');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $disciplina = new Disciplina();

        $disciplina->disciplina_nome = $request->input('nomedisciplina');
        $disciplina->disciplina_carga_horaria = $request->input('cargadisciplina');
        $disciplina->save();

        return redirect::route('cadastro.disciplina');
 
    }

    /**
     * Display the specified resource.  
     */
    public function show()
    {
        
        $disciplinas = Disciplina::all();
        return view('TelaVisualizarDisciplina',['disciplinas'=>$disciplinas,]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
         $disciplinas= Disciplina::find($request->disciplina_id);

         return view('TelaAttDisciplina',['disciplinas'=>$disciplinas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disciplina $disciplinas)
    {
        $disciplinas= Disciplina::find($request->disciplina_id);
        $disciplinas->disciplina_nome =$request->nomedisciplina;
        $disciplinas->disciplina_carga_horaria=$request->cargadisciplina;
        $disciplinas->save();

        return Redirect::route('visualizar.disciplina');
    }
    public function destroy(string $id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->delete();

        return Redirect::route('visualizar.disciplina');
    }
}
