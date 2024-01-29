<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            $user_id = $user->id;
            DB::table('travels')->insert([
                [
                'user_id' => $user_id,
                'title' => 'Séjour de 3 jour à Rome',
                'image' => 'https://res.klook.com/image/upload/fl_lossy.progressive,w_800,c_fill,q_85/Mobile/City/afmqgg5h0jl9wnr1dfmf.jpg',
                'country' => 'Italy'
                ],
                [
                'user_id' => $user_id,
                'title' => 'Séjour de 3 jour à Rome',
                'image' => 'https://res.klook.com/image/upload/fl_lossy.progressive,w_800,c_fill,q_85/Mobile/City/afmqgg5h0jl9wnr1dfmf.jpg',
                'country' => 'Italy'
                ]
            ]);
        }
    }
}
