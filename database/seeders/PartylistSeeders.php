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
            ],
            [
                'partylist_name' => 'Kapamilya',
            ],

        ]);
    }
}
