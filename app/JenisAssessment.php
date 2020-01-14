<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisAssessment extends Model
{
    protected $table = 'jenis_assessments';
    protected $fillable = [
        'npp',
        'kode_pelatihan',
        'nama_pelatihan',
        'link'
    ];
}
