<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminatanPosisiDirektur extends Model
{
    protected $guarded = [];

    /**
     * Relasi dari peminatan posisi direktur ke CV dengan menggunakan id_cv.
     *
     * @var array
     */
    public function CurriculumVitae()
    {
        return $this->belongsTo('App\CurriculumVitae', 'id_cv');
    }

    /**
     * Relasi dari master peminatan posisi direktur ke peminatan posisi direktu dengan menggunakan id_master.
     *
     * @var array
     */
    public function MasterPeminatanPosisiDirektur()
    {
        return $this->belongsTo('App\MasterPeminatanPosisiDirektur', 'id_master_peminatan_posisi_direktur');
    }
}
