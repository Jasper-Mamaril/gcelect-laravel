<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([UserSeeders::class]); 
        $this->call([PartylistSeeders::class]); 
        $this->call([PositionSeeders::class]); 
        $this->call([CandidateSeeders::class]); 
        // $this->call([VoteSeeders::class]); 
    }
}
