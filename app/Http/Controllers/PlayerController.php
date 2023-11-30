<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller {
    public function create(Request $request) {
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|unique:players|email',
            'password' => 'required|min:8'
        ]);

        $result = Player::create($request->all());

        if ($result) {
            dd("ok");
        }
    }
}
