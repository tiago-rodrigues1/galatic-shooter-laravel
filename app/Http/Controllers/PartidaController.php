<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartidaController extends Controller {
    public function create(Request $request) {
        Partida::create($request->all());
        
        return redirect('/ranking');
    }

    public function ranking() {
        $partidas = Partida::listar();
        $posicaoMaisAlta = 0;

        for ($i = 1; $i <= count($partidas); $i++) {
            if (Auth::id() == $partidas[$i]->player->id) {
                $posicaoMaisAlta = $i;
                break;
            }
        }

        return view("ranking", compact('partidas', 'posicaoMaisAlta'));
    }

}
