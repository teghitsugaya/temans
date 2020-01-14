<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $table = 'performances';
    protected $fillable = [
        'npp',
        'nama',
        'tahun_kinerja',
        'jabatan',
        'nilai_kinerja',
        'kategori'
    ];
}
