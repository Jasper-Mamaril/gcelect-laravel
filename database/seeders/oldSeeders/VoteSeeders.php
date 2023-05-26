<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoteSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('votes')->insert([
            [
                'candidate_id' => 1,
                'user_id' => 2,
            ],
            [
                'candidate_id' => 3,
                'user_id' => 2,
            ],
            [
                'candidate_id' => 4,
                'user_id' => 2,
            ],
            [
                'candidate_id' => 2,
                'user_id' => 2,
            ],

        ]);
    }
}
