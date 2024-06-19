<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizarProfessorController extends Controller
{
    public function create()
    {
        return view('telaVisualizarProfessor');
    }
}
