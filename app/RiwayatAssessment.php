<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatAssessment extends Model
{
    protected $table = 'riwayat_assessments';
    protected $fillable = [
        'npp',
        'kode_pelatihan',
        'status_image',
        'status_resume',
        'file_image',
        'file_resume'
    ];
}
