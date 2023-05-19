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
                'partylist_id' => 1,
                'position_id' => 1,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
            ],
            
            [
                'candidate_fname' => 'Kim',
                'candidate_lname' => 'Padua',
                'partylist_id' => 2,
                'position_id' => 1,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Anthony',
                'candidate_lname' => 'Mizal',
                'partylist_id' => 1,
                'position_id' => 2,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Nathaniel',
                'candidate_lname' => 'Ribada',
                'partylist_id' => 2,
                'position_id' => 2,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Jazmine',
                'candidate_lname' => 'Isip',
                'partylist_id' => 1,
                'position_id' => 3,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Jmie',
                'candidate_lname' => 'Bolate',
                'partylist_id' => 2,
                'position_id' => 3,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Raven',
                'candidate_lname' => 'Cruz',
                'partylist_id' => 1,
                'position_id' => 4,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Jasper',
                'candidate_lname' => 'Mamaril',
                'partylist_id' => 2,
                'position_id' => 4,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Daniel',
                'candidate_lname' => 'Duran',
                'partylist_id' => 1,
                'position_id' => 5,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Josh',
                'candidate_lname' => 'paclibar',
                'partylist_id' => 2,
                'position_id' => 5,
                'candidate_program' => 'BSCS',
                'candidate_yrlevel' => 'Second-year',
            ],

            [
                'candidate_fname' => 'Lucky',
                'candidate_lname' => 'Versoza',
                'partylist_id' => 1,
                'position_id' => 6,
                'candidate_program' => 'BSEMC',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Haidee',
                'candidate_lname' => 'Hidocos',
                'partylist_id' => 2,
                'position_id' => 6,
                'candidate_program' => 'BSCS',
                'candidate_yrlevel' => 'Fourth-year',
            ],

            [
                'candidate_fname' => 'Eric',
                'candidate_lname' => 'Mandrique',
                'partylist_id' => 1,
                'position_id' => 7,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Second-year',
            ],

            [
                'candidate_fname' => 'Karl',
                'candidate_lname' => 'Lacap',
                'partylist_id' => 2,
                'position_id' => 7,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'First-year',
            ],

            [
                'candidate_fname' => 'Tanya',
                'candidate_lname' => 'Gonzaga',
                'partylist_id' => 1,
                'position_id' => 8,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'First-year',
            ],

            [
                'candidate_fname' => 'Gwyneth',
                'candidate_lname' => 'Gonzales',
                'partylist_id' => 2,
                'position_id' => 8,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'First-year',
            ],

            [
                'candidate_fname' => 'Justin',
                'candidate_lname' => 'Reyes',
                'partylist_id' => 1,
                'position_id' => 9,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Fourth-year',
            ],

            [
                'candidate_fname' => 'Fatrizha',
                'candidate_lname' => 'Boongaling',
                'partylist_id' => 2,
                'position_id' => 9,
                'candidate_program' => 'BSIT',
                'candidate_yrlevel' => 'Fourth-year',
            ],

            [
                'candidate_fname' => 'Everly',
                'candidate_lname' => 'Bayog',
                'partylist_id' => 1,
                'position_id' => 10,
                'candidate_program' => 'BSCS',
                'candidate_yrlevel' => 'Fourth-year',
            ],

            [
                'candidate_fname' => 'Henrico',
                'candidate_lname' => 'Roque',
                'partylist_id' => 2,
                'position_id' => 10,
                'candidate_program' => 'BSCS',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Neil',
                'candidate_lname' => 'Figueroa',
                'partylist_id' => 1,
                'position_id' => 11,
                'candidate_program' => 'BSEMC',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Senny',
                'candidate_lname' => 'Fuertes',
                'partylist_id' => 2,
                'position_id' => 11,
                'candidate_program' => 'BSEMC',
                'candidate_yrlevel' => 'Third-year',
            ],

            [
                'candidate_fname' => 'Arron',
                'candidate_lname' => 'Mangali',
                'partylist_id' => 1,
                'position_id' => 12,
                'candidate_program' => 'ACT',
                'candidate_yrlevel' => 'Second-year',
            ],

            [
                'candidate_fname' => 'Denise',
                'candidate_lname' => 'Punzalan',
                'partylist_id' => 1,
                'position_id' => 12,
                'candidate_program' => 'ACT',
                'candidate_yrlevel' => 'Fourth-year',
            ],
        ]);
    }
}