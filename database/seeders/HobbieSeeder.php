<?php

namespace Database\Seeders;

use App\Models\hobbie;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobbieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'hobbie_name'=>'Gaming',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'hobbie_name'=>'Cooking',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'hobbie_name'=>'Reading',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'hobbie_name'=>'Music',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        hobbie::insert($data);
    }
}
