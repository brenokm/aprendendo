<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizarSalaController extends Controller
{
    public function create()
    {
        return view('telaVisualizarSala');
    }
}
