<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartylistSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partylists')->insert([
            [
                'partylist_name' => 'Kapuso',
                'status' => 'approved',
                'created_at' => '2023-05-25 04:12:54'
            ],
            [
                'partylist_name' => 'Kapamilya',
                'status' => 'approved',
                'created_at' => '2023-05-25 04:12:54'
            ]

        ]);
    }
}
