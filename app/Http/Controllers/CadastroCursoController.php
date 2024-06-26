<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

class CadastroCursoController extends Controller
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
        return view('telaCadastroCurso');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $curso = new Curso();
        $curso->curso_nome = $request->input('nomecurso');
        $curso->save();

        return redirect('telaCadastroCurso');

    

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cursos = Curso::all();
        return view('TelaVisualizarCurso', ['cursos' => $cursos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {


        $cursos = Curso::find($request->curso_id);

        return view('TelaAttCurso', ['cursos'=>$cursos]);
    }

    /**
     * Update the specified resource in  storage.
     */
    public function update(Request $request, Curso $cursos)
    {
        $cursos= Curso::find($request->curso_id);
        $cursos->curso_nome =$request->nomecurso;
        $cursos->save();

        return redirect('visualizar.Curso');
    }

    /**
     * Remove the specified  resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return Redirect::route('visualizarCurso');
    }
}
