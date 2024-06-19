<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizarAtividadeController extends Controller
{
    public function create()
    {
        return view('telaVisualizarAtividades');
    }
}
