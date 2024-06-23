<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Usuario;

class CadastroAlunoController extends Controller
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
        return view('telaCadastroAluno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->usuario_nome =  $request->input('loginaluno');
        $usuario->usuario_senha=  $request->input('senhaaluno');
        $usuario->save();

        $idusuario = $usuario->usuario_id;

        $aluno = new Aluno();
        $aluno->usuario_id =$idusuario; 
        $aluno->aluno_nome = $request->input('nomealuno');
        $aluno->save();

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       return view('TelaVisualizarAluno'); 
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
