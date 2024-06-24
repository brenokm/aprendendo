<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CadastroSalaController extends Controller
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
        return view('telaCadastroSala');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sala = new Sala();
        $sala->sala_nome = $request->input('nomesala');
        $sala->save();

        return redirect()->route('visualizar.sala');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $salas = Sala::all();
        return view('telaVisualizarSala',  ['salas' => $salas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $salas = Sala::find($request->sala_id);

        return view('TelaAttSala', [
            'salas'=>$salas
       
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sala $salas)
    {
        $salas= Sala::find($request->sala_id);
        $salas->sala_nome =$request->nomesala;
        $salas->save();

        return Redirect::route('visualizar.sala');
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sala = Sala::findOrFail($id);
        $sala->delete();

        return Redirect::route('visualizar.sala');
    }
}
