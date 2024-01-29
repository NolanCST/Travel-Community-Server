<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelLegislationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $travels = DB::table('travels')->get();
        $legislations = DB::table('legislations')->get();

        foreach ($travels as $travel) {
            $travel_id = $travel->id;
            foreach ($legislations as $legislation) {
                $legislation_id = $legislation->id;
                if ($travel->country === $legislation->country) {
                    DB::table('travel_legislation')->insert([
                        'travel_id' => $travel_id,
                        'legislation_id' => $legislation_id
                    ]);
                }
            }
        }
    }
}
