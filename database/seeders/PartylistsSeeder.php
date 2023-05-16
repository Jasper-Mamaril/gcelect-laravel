<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartylistsSeeder extends Seeder
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
                'partylist_name' => 'Tindig',
                'partylist_logo' => 'Not Available',
            ],
            
            [
                'partylist_name' => 'Diretso',
                'partylist_logo' => 'Not Available',
            ],
            
            [
                'partylist_name' => 'LakasDating',
                'partylist_logo' => 'Not Available',
            ],

        ]);
    }
}
