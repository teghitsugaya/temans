<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Create',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'Read',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'Update',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'Delete',
            'guard_name' => 'web'
        ]);
    }
}
