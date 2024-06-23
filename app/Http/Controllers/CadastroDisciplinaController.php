<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;

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

        return redirect('telaCadastroDisciplina');
 
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('TelaVisualizarDisciplina');
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
