<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'lastname' => 'Test',
                'firstname' => 'Test',
                'pseudo' => 'Test',
                'email' => 'test@example.com',
                'password' => bcrypt('Azertyuiop123*'),
                'country' => 'France',
                'status' => '0'
            ]
        ]);

        $this->call([
            TravelSeeder::class,
            TravelDaySeeder::class,
            DayImageSeeder::class,
            LegislationSeeder::class,
            TravelLegislationSeeder::class,
        ]);
    }
}
