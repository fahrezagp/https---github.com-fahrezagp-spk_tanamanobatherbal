<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
   public function index(){
        $no = 1;
        $kriteria = Kriteria::all();
        return view('kriteria.index', compact('kriteria','no'));
    }
    public function tambah(Request $request){

        $kriteria = Kriteria::create($request->all());
        return redirect('/kriteria')->withToastSuccess('Berhasil menambah kriteria!'); 
    }
     public function hapus($id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->delete($kriteria);
        return redirect('/kriteria')->withToastSuccess('Berhasil menghapus kriteria!');;
    }

    public function tambahsub($id)
    {
        $kriteria = Kriteria::find($id);
        return view('kriteria.tambahsub', compact('kriteria'));   
    }
    public function tambahsubkriteria(Request $request, $id)
    {
        $kriteria = Kriteria::find($id);
        
        $request->request->add(['kriteria_id' => $id]);

        $subkriteria = Subkriteria::create(($request->all()));
        return redirect('/kriteria')->withToastSuccess('Berhasil menambah subkriteria!');;
    }
}
