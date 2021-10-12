<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'id_category' => 1,
                'names' => 'Jhon',
                'surnames' => 'Valdes',
                'email' => 'neos@gmail.com',
                'celphone' => 123,
                'address' => 'cr 15 22-21',
                'country' => 'Colombia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
