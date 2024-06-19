<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizarDisciplinaController extends Controller
{
    public function create()
    {
        return view('telaVisualizarDisciplina');
    }
}
