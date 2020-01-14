<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $table = 'assessment';
    protected $fillable = [
        'npp',
        'nama',
        'jabatan',
        'tahun',
        'file_personal',
        'file_management',
        'file_beq',
        'file_penilaian_atasan',
        'file_rekaman_mp3'
    ];
}
