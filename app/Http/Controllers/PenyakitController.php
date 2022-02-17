<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index(){
        $no = 1;
        $penyakit = Penyakit::all();
        return view('penyakit.index', compact('penyakit','no'));
    }
    public function tambah(Request $request){

        $penyakit = Penyakit::create($request->all());
        return redirect('/penyakit')->withToastSuccess('Berhasil menambah penyakit!'); 
    }
     public function hapus($id)
    {
        $penyakit = Penyakit::find($id);
        $penyakit->delete($penyakit);
        return redirect('/penyakit')->withToastSuccess('Berhasil menghapus penyakit!');
    }
}
