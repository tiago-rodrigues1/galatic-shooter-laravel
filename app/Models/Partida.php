<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
            $partida->player=Auth()::id();
            
            return $partida->save();
        } catch (Exception $e) {
            return null;
        }
    }
}
