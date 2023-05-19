<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'position_name' => 'President',
            ],
            [
                'position_name' => 'Vice-President Internal Affairs',
            ],
            [
                'position_name' => 'Vice-President External Affairs',
            ],
            [
                'position_name' => 'Secretary',
            ],
            [
                'position_name' => 'Treasurer',
            ],
            [
                'position_name' => 'Auditor',
            ],
            [
                'position_name' => 'Public Information Officer',
            ],
            [
                'position_name' => 'Business Manager',
            ],
            [
                'position_name' => 'BSIT Representative',
            ],
            [
                'position_name' => 'BSCS Representative',
            ],
            [
                'position_name' => 'BSEMC Representative',
            ],
            [
                'position_name' => 'ACT Representative',
            ],

        ]);
    }
}
