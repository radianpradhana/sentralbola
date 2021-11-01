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

    public function create()
    {
    	$judul 		= 	'Add Player';
    	return view('player.add', compact(['judul']));
    }

    public function store(Request $request)
    {
    	Player::create($request->all());
    	return redirect('/player');
    }

    public function edit($id)
    {
    	$judul 		= 	'Edit Player';
    	$player 	= 	Player::find($id);
    	return view('player.edit', compact(['judul','player']));
    }

    public function update(Request $request, $id)
    {
    	$player 	= 	Player::find($id);
    	$player->update($request->all());
    	return redirect('/player');
    }

    public function destroy($id)
    {
    	$player 	= 	Player::find($id);
    	$player->delete();
    	return redirect('/player');
    }
}
