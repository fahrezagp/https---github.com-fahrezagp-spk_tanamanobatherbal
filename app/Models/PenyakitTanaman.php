<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyakitTanaman extends Model
{
    protected $table = 'penyakit_tanaman';
    protected $fillable = ['penyakit_id', 'tanaman_id', 'subkriteria_id'];
}