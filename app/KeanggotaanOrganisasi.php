<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeanggotaanOrganisasi extends Model
{
    protected $guarded = [];

    /**
     * Relasi dari KEanggotaan Organiaasi  ke CV dengan menggunakan id_cv.
     *
     * @var array
     */
    public function CurriculumVitae()
    {
        return $this->belongsTo('App\CurriculumVitae', 'id_cv');
    }
}
