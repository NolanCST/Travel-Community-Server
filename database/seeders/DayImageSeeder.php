<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DayImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $travelDays = DB::table('travel_days')->get();

        foreach ($travelDays as $travelDay) {
            $travelDay_id = $travelDay->id;
            DB::table('day_images')->insert([
                [
                    'travel_day_id' => $travelDay_id,
                    'image' => 'https://www.partir-a-rome.com/wp-content/uploads/2021/03/2019-colisee-1024x683.jpg.webp',
                    'alt' => 'image 1',
                ],
                [
                    'travel_day_id' => $travelDay_id,
                    'image' => 'https://www.partir-a-rome.com/wp-content/uploads/2021/03/2019-fontaine-de-trevi.jpeg',
                    'alt' => 'image 2',
                ],
                [
                    'travel_day_id' => $travelDay_id,
                    'image' => 'https://www.partir-a-rome.com/wp-content/uploads/2021/03/forum-romain-rome.jpg',
                    'alt' => 'image 3',
                ]
            ]);
        }
    }
}
