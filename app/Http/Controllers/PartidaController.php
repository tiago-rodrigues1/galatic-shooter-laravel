<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidaController extends Controller
{
    public function createPartida(Request $request) {
        $request->validate([
            'acertos' => 'required|numeric',
            'erros' => 'required|numeric',
        ]);

        $partida = Partida::createPartida($request->all());
        
        return redirect('/ranking');
    }

    public function ranking(Request $request) {
        $partidas = Partida::all();
    
        return view('ranking', ['partidas' => $partidas]);
    }

}
