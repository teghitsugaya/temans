<?php

use Illuminate\Database\Seeder;
use App\RoleHasPermission;

class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Permission:
         *  1. Create
         *  2. Read
         *  3. Update
         *  4. Delete
         * 
         * Role:
         * 1. Admin
         * 3. User
         */
        

        /**
         * Admin Role Permission
         */
        RoleHasPermission::create([
            'permission_id' => '1',
            'role_id' => '1'
        ]);

        RoleHasPermission::create([
            'permission_id' => '2',
            'role_id' => '1'
        ]);

        RoleHasPermission::create([
            'permission_id' => '3',
            'role_id' => '1'
        ]);

        RoleHasPermission::create([
            'permission_id' => '4',
            'role_id' => '1'
        ]);

        /**
         * User Role Permission
         */
        RoleHasPermission::create([
            'permission_id' => '2',
            'role_id' => '2'
        ]);
    }
}
