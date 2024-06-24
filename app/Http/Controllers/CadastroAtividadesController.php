<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

use App\Models\Atividade;
use Illuminate\Support\Facades\Redirect;

class CadastroAtividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //read
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    $turmas = Turma::all();
        
        return view('telaCadastroAtividades', ['turmas' => $turmas]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $atividade = new Atividade();
        $atividade->turma_id =$request->idturma; 
        $atividade->atividade_nome = $request->input('nomeatividade');
        $atividade->atividade_descricao = $request->input('descricaoatividade');
        $atividade->save();


        return redirect()->route('visualizar.atividade');
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $turmas=Turma::all();
        $atividades = Atividade::all();
        return view('telaVisualizarAtividades', ['turmas' => $turmas, 'atividades'=>$atividades]);
        
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
        $atividades = Atividade::findOrFail($id);
        $atividades->delete();

        return Redirect::route('visualizar.professor');
    }
}
