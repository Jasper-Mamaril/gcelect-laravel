<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'admin_name' => 'Alexa Digital',
                'admin_email' => 'voteadmin01@gordoncollege.edu.ph',
                'admin_pword' => '123Alexa'
            ],
            
            [
                'admin_name' => 'Harold Walker',
                'admin_email' => 'voteadmin02@gordoncollege.edu.ph',
                'admin_pword' => '123Harold'
            ],
            
            [
                'admin_name' => 'Carl Benjamins',
                'admin_email' => 'voteadmin03@gordoncollege.edu.ph',
                'admin_pword' => '123Carl'
            ]

        ]);
    }
}
