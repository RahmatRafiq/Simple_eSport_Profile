<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;

class FrontendController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        $players = Player::get();

        return view('frontend.home', compact('teams', 'players'));

    }
}
