<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    protected $fillable = ['kriteria', 'sifat', 'bobot'];

    public function subkriteria()
    {
        return $this->hasMany(Subkriteria::class);
    }

    public function tanaman(){
        return $this->belongsToMany(Tanaman::class);
    }
}
