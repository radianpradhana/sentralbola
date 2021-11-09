<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class ApiPemainController extends Controller
{
    public function index()
    {
    	$pemain_semua 	= 	Pemain::all();
    	return response()->json(['pesan' => 'Sukses','data' => $pemain_semua]);
    }

    public function show($id)
    {
    	$pemain 	=	Pemain::find($id);
    	return response()->json(['pesan' => 'Sukses','data' => $pemain]);

    }

    public function store(Request $request)
    {
    	$pemain 	= 	Pemain::create($request->all());
    	return response()->json(['pesan' => 'Data berhasil diinput','data' => $pemain]);
    }

    public function update(Request $request, $id)
    {
    	$pemain 	= 	Pemain::find($id);
    	$pemain->update($request->all());
    	return response()->json(['pesan' => 'Data berhasil dirubah','data' => $pemain]);
    }

    public function destroy($id)
    {
    	$pemain 	= 	Pemain::find($id);
    	$pemain->delete();
    	return response()->json(['pesan' => 'Data berhasil dihapus','data' => null]);
    }
}
