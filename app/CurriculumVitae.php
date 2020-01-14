<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurriculumVitae extends Model
{
    protected $guarded = [];

    /**
     * Relasi dari Curicullum Vitae ke user dengan menggunakan id_user.
     *
     * @var array
     */
    public function User()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function Summary()
    {
        return $this->hasMany('App\Summary', 'id_cv');
    }

    public function Interest()
    {
        return $this->hasMany('App\Interest', 'id_cv');
    }

    public function PeminatanPosisiDirektur()
    {
        return $this->hasMany('App\PeminatanPosisiDirektur', 'id_cv');
    }

    public function RiwayatJabatan()
    {
        return $this->hasMany('App\RiwayatJabatan', 'id_cv');
    }

    public function KeanggotaanOrganisasi()
    {
        return $this->hasMany('App\KeanggotaanOrganisasi', 'id_cv');
    }

    public function Penghargaan()
    {
        return $this->hasMany('App\Penghargaan', 'id_cv');
    }

    public function RiwayatPendidikanFormal()
    {
        return $this->hasMany('App\RiwayatPendidikanFormal', 'id_cv');
    }

    public function RiwayatPelatihan()
    {
        return $this->hasMany('App\RiwayatPelatihan', 'id_cv');
    }

    public function PengalamanNarasumber()
    {
        return $this->hasMany('App\PengalamanNarasumber', 'id_cv');
    }
    public function KaryaTulis()
    {
        return $this->hasMany('App\KaryaTulis', 'id_cv');
    }

    public function Referensi()
    {
        return $this->hasMany('App\Referensi', 'id_cv');
    }

    public function KeteranganKeluarga()
    {
        return $this->hasMany('App\KeteranganKeluarga', 'id_cv');
    }
}
