<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryaTulis extends Model
{
    protected $guarded = [];

    /**
     * Relasi dari Karya Tulis ke CV dengan menggunakan id_cv.
     *
     * @var array
     */
    public function CurriculumVitae()
    {
        return $this->belongsTo('App\CurriculumVitae', 'id_cv');
    }
}
