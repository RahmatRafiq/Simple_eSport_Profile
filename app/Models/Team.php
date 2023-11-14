<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $fillable = ['name', 'logo', 'description', 'achievement'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
