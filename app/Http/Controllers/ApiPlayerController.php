<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class ApiPlayerController extends Controller
{
    public function index()
    {
    	$players 	= 	Player::all();
    	return response()->json(['message' => 'Success','data' => $players]);
    }

    public function show($id)
    {
    	$player 	=	Player::find($id);
    	return response()->json(['message' => 'Success','data' => $player]);

    }

    public function store(Request $request)
    {
    	$player 	= 	Player::create($request->all());
    	return response()->json(['message' => 'Data has been inserted successfully','data' => $player]);
    }

    public function update(Request $request, $id)
    {
    	$player 	= 	Player::find($id);
    	$player->update($request->all());
    	return response()->json(['message' => 'Data has been edited successfully','data' => $player]);
    }

    public function destroy($id)
    {
    	$player 	= 	Player::find($id);
    	$player->delete();
    	return response()->json(['message' => 'Data has been deleted successfully','data' => null]);
    }
}
