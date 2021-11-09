<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;
use Dompdf\Dompdf;

class PemainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    	$judul = 'Beranda';
        return view('main', compact(['judul']));
    }

    public function pemain()
    {
        $judul            =   'Pemain';
        $pemain_semua     =   Pemain::all();
        return view('pemain.data', compact(['judul','pemain_semua']));
    }

    public function create()
    {
    	$judul 		      =  'Tambah Pemain';
    	return view('pemain.tambah', compact(['judul']));
    }

    public function store(Request $request)
    {

        $validasi_data = $request->validate([
            'nama' => 'required',
            'negara' => 'required',
            'usia' => 'required',
            'klub' => 'required',
            'posisi' => 'required'
        ], [
            'nama.required' => 'Nama harus di isi',
            'negara.required' => 'Negara harus di isi',
            'usia.required' => 'Usia pemain harus di isi',
            'klub.required' => 'Klub harus di isi',
            'posisi.required' => 'Posisi harus di isi'
        ]);
    	Pemain::create($request->all());
    	return redirect('/pemain')->with('notifikasi','Data berhasil ditambah');
    }

    public function edit($id)
    {
    	$judul 		= 	'Rubah Pemain';
    	$pemain 	= 	Pemain::find($id);
    	return view('pemain.rubah', compact(['judul','pemain']));
    }

    public function update(Request $request, $id)
    {
    	$pemain 	= 	Pemain::find($id);
    	$pemain->update($request->all());
    	return redirect('/pemain')->with('notifikasi','Data berhasil dirubah');
    }

    public function destroy($id)
    {
    	$pemain 	= 	Pemain::find($id);
    	$pemain->delete();
    	return redirect('/pemain')->with('notifikasi','Data berhasil dihapus');
    }

    public function print_pdf()
    {
        $judul          =   'Master Data';
        $pemain_semua   =   Pemain::all();
        $html           =   view('pemain.print_pdf', compact(['judul','pemain_semua']));

        $dompdf = new Dompdf();
        $dompdf->loadhtml($html);
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
