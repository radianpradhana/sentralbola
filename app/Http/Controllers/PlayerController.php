<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
    	$judul 		= 	'Player';
    	$players	= 	Player::all();
    	return view('player.data', compact(['judul','players']));
    }
}
