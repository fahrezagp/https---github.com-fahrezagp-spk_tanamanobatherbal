<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class SubkriteriaController extends Controller
{
    public function index(){
        $no = 1;
        $subkriteria = Subkriteria::all();
        $kriteria = Kriteria::all();
        return view('subkriteria.index', compact('subkriteria','no','kriteria'));
    }
    public function tambah(Request $request){

        $subkriteria = Subkriteria::create($request->all());
        return redirect('/subkriteria')->withToastSuccess('Berhasil menambah subkriteria!');; 
    }
     public function hapus($id)
    {
        $subkriteria = Subkriteria::find($id);
        $subkriteria->delete($subkriteria);
        return redirect('/subkriteria')->withToastSuccess('Berhasil menghapus subkriteria!');;
    }
}
