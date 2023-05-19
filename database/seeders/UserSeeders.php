<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeders extends Seeder
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
                'user_fname' => 'Lou',
                'user_lname' => 'Ballesteros',
                'user_email' => 'lb@gordoncollege.edu.ph',
                'user_pword' => 'password123',
            ],
            
            [
                'user_fname' => 'Kim',
                'user_lname' => 'Padua',
                'user_email' => 'kp@gordoncollege.edu.ph',
                'user_pword' => 'password123',
            ],

            [
                'user_fname' => 'Anthony',
                'user_lname' => 'Mizal',
                'user_email' => 'am@gordoncollege.edu.ph',
                'user_pword' => 'password123',
            ],
            
            [
                'user_fname' => 'Jasper',
                'user_lname' => 'Mamaril',
                'user_email' => 'jm@gordoncollege.edu.ph',
                'user_pword' => 'password123',
            ],

            [
                'user_fname' => 'Nathaniel',
                'user_lname' => 'Ribada',
                'user_email' => 'nr@gordoncollege.edu.ph',
                'user_pword' => 'password123',
            ],

            [
                'user_fname' => 'Jmie',
                'user_lname' => 'Bolate',
                'user_email' => 'jb@gordoncollege.edu.ph',
                'user_pword' => 'password123',
            ],

            [
                'user_fname' => 'Lovelyn',
                'user_lname' => 'Perez',
                'user_email' => 'lp@gordoncollege.edu.ph',
                'user_pword' => 'password123',
            ],

            [
                'user_fname' => 'Raven',
                'user_lname' => 'Cruz',
                'user_email' => 'rc@gordoncollege.edu.ph',
                'user_pword' => 'password123',
            ],

        ]);
    }
}
