<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($iArtists = 1; $iArtists <= 7; $iArtists++) {
            for ($nbVotes = 1; $nbVotes <= rand(400, 2500); $nbVotes++) {
                $result = $nbVotes % $iArtists ? 1 : -1;
                DB::table('votes')->insert([
                    'result' => $result,
                    'artist_id' => $iArtists
                ]);
            }
        }
    }
}
