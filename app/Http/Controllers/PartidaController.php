<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partida;

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
        $partidas = Partida::orderBy('acertos', 'desc')
                            ->orderBy('erros', 'asc')
                            ->orderBy('data_hora', 'desc')    
                            ->get();

        return view('ranking', ['partidas' => $partidas]);
    }

}
