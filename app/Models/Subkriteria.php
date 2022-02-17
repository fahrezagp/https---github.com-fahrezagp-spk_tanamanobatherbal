<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    protected $table = 'subkriteria';
    protected $fillable = ['subkriteria', 'kriteria_id', 'bobot'];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function tanaman(){
        return $this->belongsToMany(Tanaman::class);
    }
}
 