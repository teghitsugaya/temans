<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatJabatan extends Model
{
    protected $guarded = [];

    /**
     * Relasi dari riwayat jabatan ke CV dengan menggunakan id_cv.
     *
     * @var array
     */
    public function CurriculumVitae()
    {
        return $this->belongsTo('App\CurriculumVitae', 'id_cv');
    }
}
