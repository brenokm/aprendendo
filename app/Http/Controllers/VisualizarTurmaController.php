<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizarTurmaController extends Controller
{
    public function create()
    {
        return view('telaVisualizarTurma');
    }
}
