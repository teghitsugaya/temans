<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'status' => 'Pending'
        ]);

        Status::create([
            'status' => 'Terkonfirmasi'
        ]);
    }
}
