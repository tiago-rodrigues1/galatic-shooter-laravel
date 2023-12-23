<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Player extends Authenticatable {
    use HasFactory;

    protected $fillable = ['nome', 'email', 'password'];
    protected $hidden = ['password'];
    
    public function partidas(){
        return $this->hasMany(Partida::class);
    }

    public static function create($data) {
        try {
            $player = new Player($data);
            $player->password = Hash::make($player->password);

            return $player->save();
        } catch (\Exception $e) {
            return null;
        }
    }
}
