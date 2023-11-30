<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Player extends Authenticatable {
    use HasFactory;

    protected $fillable = ['nome', 'email', 'password'];
    protected $hidden = ['password'];

    public static function create($data) {
        try {
            $player = new Player($data);
            $player->password = Hash::make($player->password);

            return $player->save();
        } catch (Exception $e) {
            dd($e);
            return null;
        }
    }
}
