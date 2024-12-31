<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cities = [
            // California (state_id = 1)
            ['id' => 1, 'state_id' => 1, 'name' => 'Los Angeles'],
            ['id' => 2, 'state_id' => 1, 'name' => 'San Francisco'],
            ['id' => 3, 'state_id' => 1, 'name' => 'San Diego'],

            // Texas (state_id = 3)
            ['id' => 4, 'state_id' => 3, 'name' => 'Houston'],
            ['id' => 5, 'state_id' => 3, 'name' => 'Dallas'],
            ['id' => 6, 'state_id' => 3, 'name' => 'Austin'],

            // Maharashtra (state_id = 4)
            ['id' => 7, 'state_id' => 4, 'name' => 'Mumbai'],
            ['id' => 8, 'state_id' => 4, 'name' => 'Pune'],
            ['id' => 9, 'state_id' => 4, 'name' => 'Nagpur'],

            // Ontario (state_id = 7)
            ['id' => 10, 'state_id' => 7, 'name' => 'Toronto'],
            ['id' => 11, 'state_id' => 7, 'name' => 'Ottawa'],
            ['id' => 12, 'state_id' => 7, 'name' => 'Mississauga'],
        ];

        // شہروں کو ڈیٹا بیس میں ڈالنا
        DB::table('cities')->insert($cities);
    }
}
