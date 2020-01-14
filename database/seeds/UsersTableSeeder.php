<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@kimiafarma.co.id',
            'password' => bcrypt('kimiafarma'),
            'id_status' => '2',
            'npp' => '000'
        ])->assignRole('Admin');

        $user = User::create([
            'name' => 'Sukma Wijaya',
            'email' => 'user@kimiafarma.co.id',
            'password' => bcrypt('kimiafarma'),
            'id_status' => '2',
            'npp' => '10012345'
        ])->assignRole('User');

    }
}
