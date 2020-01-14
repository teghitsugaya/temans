<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeteranganKeluarga extends Model
{
    protected $guarded = [];

    /**
     * Relasi dari keterangan Keluarga ke CV dengan menggunakan id_cv.
     *
     * @var array
     */
    public function CurriculumVitae()
    {
        return $this->belongsTo('App\CurriculumVitae', 'id_cv');
    }
}
