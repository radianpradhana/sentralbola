<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Dompdf\Dompdf;

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

        $validasi_data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'club' => 'required',
            'position' => 'required'
        ], [
            'name.required' => 'Name must be filled',
            'age.required' => 'Age must be filled',
            'club.required' => 'Club must be filled',
            'position.required' => 'Position must be filled'
        ]);
    	Player::create($request->all());
    	return redirect('/player')->with('notice','Data Added Successfully');
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
    	return redirect('/player')->with('notice','Data Updated Successfully');
    }

    public function destroy($id)
    {
    	$player 	= 	Player::find($id);
    	$player->delete();
    	return redirect('/player')->with('notice','Data Deleted Successfully');
    }

    public function print_pdf()
    {
        $judul      =   'Master Data';
        $players    =   Player::all();
        $html       =   view('player.print_pdf', compact(['judul','players']));

        $dompdf = new Dompdf();
        $dompdf->loadhtml($html);
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
