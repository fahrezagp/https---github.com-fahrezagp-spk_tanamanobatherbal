<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'tanaman';
    protected $fillable = ['nama_tanaman'];

    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class);
    }

    public function kriteria()
    {
        return $this->belongsToMany(Kriteria::class);
    }
    
    public function subkriteria()
    {
        return $this->belongsToMany(Subkriteria::class);
    }
}
