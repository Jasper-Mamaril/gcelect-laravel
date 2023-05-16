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
                'user_name' => 'Lou Bryan Ballesteros',
                'user_domain' => '202011096@gordoncollege.edu.ph',
                'user_pword' => '123Lou'
            ],
            
            [
                'user_name' => 'Jasper Robert Mamaril',
                'user_domain' => '202013579@gordoncollege.edu.ph',
                'user_pword' => '123Jasper'
            ],
            
            [
                'user_name' => 'Alex Jones',
                'user_domain' => '202024680@gordoncollege.edu.ph',
                'user_pword' => '123Alex'
            ],

        ]);
    }
}
