<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Subkriteria;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class HasilController extends Controller
{
   public function index ()
   {
       //tabel 1
       $tanaman = Tanaman::all();
       $kriteria = Kriteria::all();
       $subkriteria = Subkriteria::all();
        $no = 1;
        $hitung = [];

        //tabel 2
        foreach ( $kriteria as $key => $krit){
            foreach ($tanaman as $key_1 => $tanaman_1){
                foreach ($tanaman_1->subkriteria as $tanam){
                    if($krit->id == $tanam->kriteria_id){
                        if($krit->sifat == 'Benefit'){
                        $minMax[$krit->id][] = $tanam->bobot;
                        }elseif($krit->sifat == 'Cost'){
                            $minMax[$krit->id][] = $tanam->bobot;
                        }
                    }
                }
            
            }
        }
        //dd($minMax);

        //hitung tabel2
        
            foreach($tanaman as  $tanam){
                foreach($tanam->subkriteria as $key_1 => $subtanam){
                    foreach($kriteria as $key => $krit){
                    if ($krit->id == $subtanam->kriteria_id){
                        if($krit->sifat == 'Benefit'){
                        $hitung[$tanam->nama_tanaman][$krit->id] =
                            $subtanam->bobot / max($minMax[$krit->id]);
                        }   else if($krit->sifat = 'Cost'){
                        $hitung[$tanam->nama_tanaman][$krit->id] =
                            min($minMax[$krit->id]) / $subtanam->bobot;
                        }
                    }
                }
            }
        }
        //dd($hitung);

        //tabel3 dikali bobot
        foreach($hitung as $key => $value){
            foreach($kriteria as $key_1 => $value_1){
                //dd($value_1);
                $bobot[$key][] = $value[$value_1->id] * $value_1->bobot;
            }
        }
        //dd($rank);

        // tabel 4 perangkingan
        $ranking = $bobot;
        foreach ($hitung as $key => $value) {
                $ranking[$key][] = array_sum($bobot[$key]);
            }
        
        arsort($ranking);
        //dd($hitung);
        return view ('hasil.index', compact('tanaman','kriteria','subkriteria','hitung','bobot','no','ranking'));
   }
}
