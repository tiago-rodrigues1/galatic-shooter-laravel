<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Partida extends Model
{
    use HasFactory;

    protected $fillable = ['acertos', 'erros'];

    public function player() {
        return $this->belongsTo(Player::class);
    }

    public static function create($data) {
        try {
            $partida = new Partida($data);
            $partida->player()->associate(Auth::user());
            
            return $partida->save();
        } catch (\Exception $e) {
            return null;
        }
    }

    public static function listar() {
        $partidas = Partida::orderby('acertos', 'desc')->orderBy('erros', 'asc')->orderBy('created_at', 'desc')->get();

        return $partidas;
    }
}
