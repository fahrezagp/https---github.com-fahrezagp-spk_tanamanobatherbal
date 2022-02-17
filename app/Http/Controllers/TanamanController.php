<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Penyakit;
use App\Models\PenyakitTanaman;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class TanamanController extends Controller
{
   public function index()
   {
       $no = 1;
       $penyakit = Penyakit::all();
       $tanaman = Tanaman::all();
       $kriteria = Kriteria::all();
        return view('tanaman.index', compact('penyakit','tanaman','kriteria','no'));
    }


    public function tambah(Request $request)
    {   
        $penyakit = $request->penyakit;
        $tanaman = new Tanaman();
        $tanaman-> nama_tanaman = $request->tanaman;
        $sub = $request->subkriteria;
        $tanaman->save();
        
        $tanaman->penyakit()->attach($penyakit);
        $tanaman->subkriteria()->attach($sub);

        return redirect()->back()->withToastSuccess('Berhasil menambah tanaman!'); 
        //return dd($request);
    }
}
