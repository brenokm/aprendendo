<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizarAlunoController extends Controller
{
    public function create()
    {
        return view('TelaVisualizarAluno');
    }
}
