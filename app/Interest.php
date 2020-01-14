<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $guarded = [];

    /**
     * Relasi dari Interest ke CV dengan menggunakan id_cv.
     *
     * @var array
     */
    public function CurriculumVitae()
    {
        return $this->belongsTo('App\CurriculumVitae', 'id_cv');
    }

        /**
     * Relasi dari Kategori interes ke Interes dengan menggunakan id_kategori_interest.
     *
     * @var array
     */
    public function KategoriInterest()
    {
        return $this->belongsTo('App\KategoriInterest', 'id_kategori_interest');
    }
}
