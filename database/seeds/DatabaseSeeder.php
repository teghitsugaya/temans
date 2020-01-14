<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleTableSeeder::class,
            PermissionsTableSeeder::class,
            RoleHasPermissionTableSeeder::class,
            UsersTableSeeder::class,
            StatusesTableSeeder::class,
            CurriculumVitaeTableSeeder::class,
            SummaryTableSeeder::class,
            InterestTableSeeder::class,
            KaryaTulisTableSeeder::class,
            KategoriInterestTableSeeder::class,
            KeanggotaanOrganisasiTableSeeder::class,
            KeteranganKeluargaTableSeeder::class,
            MasterPeminatanPosisiDirekturTableSeeder::class,
            PeminatanPosisiDirekturTableSeeder::class,
            PengalamanNarasumberTableSeeder::class,
            PenghargaanTableSeeder::class,
            ReferensiTableSeeder::class,
            RiwayatJabatanTableSeeder::class,
            RiwayatPelatihanTableSeeder::class,
            RiwayatPendidikanFormalTableSeeder::class,
            MasterTableSeeder::class,
        ]);
    }
}
