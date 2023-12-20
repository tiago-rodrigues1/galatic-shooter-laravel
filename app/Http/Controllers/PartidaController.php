<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidaController extends Controller
{
    public function createPartida(Request $request) {
        $request->validate([
            'jogador' => 'required|string',
            'acertos' => 'required|numeric',
            'erros' => 'required|numeric',
        ]);

        $partida = Partida::createPartida($request->all());
        
        return redirect('/ranking');
    }

}
