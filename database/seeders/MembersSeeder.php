<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'partylist_id' => '1',
                'member_fname' => 'Daniel',
                'member_lname' => 'Fisher',
                'member_position' => 'President',
                'member_picture' => 'Not available'
            ],
            
            [
                'partylist_id' => '2',
                'member_fname' => 'Vincent',
                'member_lname' => 'Tan',
                'member_position' => 'President',
                'member_picture' => 'Not available'
            ],
            [
                'partylist_id' => '1',
                'member_fname' => 'Cristine',
                'member_lname' => 'Ollen',
                'member_position' => 'Vice President for Internal Affairs',
                'member_picture' => 'Not available'
            ],
            
            [
                'partylist_id' => '2',
                'member_fname' => 'Alexander',
                'member_lname' => 'Greats',
                'member_position' => 'Vice President for Internal Affairs',
                'member_picture' => 'Not available'
            ],

            [
                'partylist_id' => '3',
                'member_fname' => 'Shane',
                'member_lname' => 'Mendoza',
                'member_position' => 'Vice President for Internal Affairs',
                'member_picture' => 'Not available'
            ],

        ]);

    }
}
