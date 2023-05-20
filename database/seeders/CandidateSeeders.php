<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidates')->insert([
            [
                'candidate_fname' => 'Lou',
                'candidate_lname' => 'Ballesteros',
                'partylist_name' => 'Kapuso',
                'position_id' => 1,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],
            
            [
                'candidate_fname' => 'Kim',
                'candidate_lname' => 'Padua',
                'partylist_name' => 'Kapamilya',
                'position_id' => 1,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Anthony',
                'candidate_lname' => 'Mizal',
                'partylist_name' => 'Kapuso',
                'position_id' => 2,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Nathaniel',
                'candidate_lname' => 'Ribada',
                'partylist_name' => 'Kapamilya',
                'position_id' => 2,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Jazmine',
                'candidate_lname' => 'Isip',
                'partylist_name' => 'Kapuso',
                'position_id' => 3,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Jmie',
                'candidate_lname' => 'Bolate',
                'partylist_name' => 'Kapamilya',
                'position_id' => 3,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Raven',
                'candidate_lname' => 'Cruz',
                'partylist_name' => 'Kapuso',
                'position_id' => 4,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Jasper',
                'candidate_lname' => 'Mamaril',
                'partylist_name' => 'Kapamilya',
                'position_id' => 4,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Daniel',
                'candidate_lname' => 'Duran',
                'partylist_name' => 'Kapuso',
                'position_id' => 5,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Josh',
                'candidate_lname' => 'paclibar',
                'partylist_name' => 'Kapamilya',
                'position_id' => 5,
                'candidate_program' => 'BSCS',
                'candidate_yrlevel' => 'Second-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Lucky',
                'candidate_lname' => 'Versoza',
                'partylist_name' => 'Kapuso',
                'position_id' => 6,
                'candidate_program' => 'BSEMC',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Haidee',
                'candidate_lname' => 'Hidocos',
                'partylist_name' => 'Kapamilya',
                'position_id' => 6,
                'candidate_program' => 'BSCS',
                'candidate_yrlevel' => 'Fourth-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Eric',
                'candidate_lname' => 'Mandrique',
                'partylist_name' => 'Kapuso',
                'position_id' => 7,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Second-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Karl',
                'candidate_lname' => 'Lacap',
                'partylist_name' => 'Kapamilya',
                'position_id' => 7,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'First-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Tanya',
                'candidate_lname' => 'Gonzaga',
                'partylist_name' => 'Kapuso',
                'position_id' => 8,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'First-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Gwyneth',
                'candidate_lname' => 'Gonzales',
                'partylist_name' => 'Kapamilya',
                'position_id' => 8,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'First-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Justin',
                'candidate_lname' => 'Reyes',
                'partylist_name' => 'Kapuso',
                'position_id' => 9,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Fourth-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Fatrizha',
                'candidate_lname' => 'Boongaling',
                'partylist_name' => 'Kapamilya',
                'position_id' => 9,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Fourth-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Everly',
                'candidate_lname' => 'Bayog',
                'partylist_name' => 'Kapuso',
                'position_id' => 10,
                'candidate_program' => 'BSCS',
                'candidate_yrlevel' => 'Fourth-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Henrico',
                'candidate_lname' => 'Roque',
                'partylist_name' => 'Kapamilya',
                'position_id' => 10,
                'candidate_program' => 'BSCS',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Neil',
                'candidate_lname' => 'Figueroa',
                'partylist_name' => 'Kapuso',
                'position_id' => 11,
                'candidate_program' => 'BSEMC',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Senny',
                'candidate_lname' => 'Fuertes',
                'partylist_name' => 'Kapamilya',
                'position_id' => 11,
                'candidate_program' => 'BSEMC',
                'candidate_yrlevel' => 'Third-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Arron',
                'candidate_lname' => 'Mangali',
                'partylist_name' => 'Kapuso',
                'position_id' => 12,
                'candidate_program' => 'ACT',
                'candidate_yrlevel' => 'Second-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],

            [
                'candidate_fname' => 'Denise',
                'candidate_lname' => 'Punzalan',
                'partylist_name' => 'Kapamilya',
                'position_id' => 12,
                'candidate_program' => 'ACT',
                'candidate_yrlevel' => 'Fourth-year',
                'candidate_picture' => 'Unavailable',
                'candidate_platform' => 'Example platform',
                'candidate_achievement' => 'Example achievement',
            ],
        ]);
    }
}
