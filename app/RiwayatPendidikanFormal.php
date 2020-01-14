<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikanFormal extends Model
{
    protected $guarded = [];

    /**
     * Relasi dari riwayat pendidikan formal ke CV dengan menggunakan id_cv.
     *
     * @var array
     */
    public function CurriculumVitae()
    {
        return $this->belongsTo('App\CurriculumVitae', 'id_cv');
    }
}
