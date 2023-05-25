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
                'user_fname' => 'GCELECT',
                'user_lname' => 'Admin',
                'email' => 'admin.gcelect@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'admin',
                'user_status' => 'no'
            ],

            [
                'user_fname' => 'Lou',
                'user_lname' => 'Ballesteros',
                'email' => 'lb@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'user',
                'user_status' => 'no'
            ],
            
            [
                'user_fname' => 'Kim',
                'user_lname' => 'Padua',
                'email' => 'kp@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'user',
                'user_status' => 'no'
            ],

            [
                'user_fname' => 'Anthony',
                'user_lname' => 'Mizal',
                'email' => 'am@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'user',
                'user_status' => 'no'
            ],
            
            [
                'user_fname' => 'Jasper',
                'user_lname' => 'Mamaril',
                'email' => 'jm@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'user',
                'user_status' => 'no'
            ],

            [
                'user_fname' => 'Nathaniel',
                'user_lname' => 'Ribada',
                'email' => 'nr@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'user',
                'user_status' => 'no'
            ],

            [
                'user_fname' => 'Jmie',
                'user_lname' => 'Bolate',
                'email' => 'jb@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'user',
                'user_status' => 'no'
            ],

            [
                'user_fname' => 'Lovelyn',
                'user_lname' => 'Perez',
                'email' => 'lp@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'user',
                'user_status' => 'no'
            ],

            [
                'user_fname' => 'Raven',
                'user_lname' => 'Cruz',
                'email' => 'rc@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'user',
                'user_status' => 'no'
            ],

            [
                'user_fname' => 'Kapuso',
                'user_lname' => 'Partylist',
                'email' => 'kapuso@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'partylist',
                'user_status' => 'yes'
            ],

            [
                'user_fname' => 'Kapamilya',
                'user_lname' => 'Partylist',
                'email' => 'kapamilya@gordoncollege.edu.ph',
                'password' => '$2y$10$fAO9OZ/YK.NYnMKTdMWE/eoYBu1AIQL35.c/a2Up0gpHk/nUvT64a',
                'user_roles' => 'partylist',
                'user_status' => 'yes'
            ],

        ]);
    }
}
