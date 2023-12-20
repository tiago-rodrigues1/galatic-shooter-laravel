<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $fillable = ['jogador', 'acertos', 'erros', 'data_hora'];

    public static function create($u) {
        try {
            $partida = new Partida($u);
            $partida->password = Hash::make($player->password);

            return $player->save();
        } catch (Exception $e) {
            dd($e);
            return null;
        }
    }
    public function player(){
        return $this->belongsTo(Player::class);
    }
}
