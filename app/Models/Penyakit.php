<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';
    protected $fillable = ['nama_penyakit'];

    public function tanaman()
    {
        return $this->belongsToMany(Tanaman::class);
    }
}