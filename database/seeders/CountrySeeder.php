<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $countries = [
            ['id' => 1, 'code' => 'US', 'name' => 'United States', 'phonecode' => 1],
            ['id' => 2, 'code' => 'IN', 'name' => 'India', 'phonecode' => 91],
            ['id' => 3, 'code' => 'UK', 'name' => 'United Kingdom', 'phonecode' => 44],
            ['id' => 4, 'code' => 'AU', 'name' => 'Australia', 'phonecode' => 61],
            ['id' => 5, 'code' => 'CA', 'name' => 'Canada', 'phonecode' => 1],
            ['id' => 6, 'code' => 'DE', 'name' => 'Germany', 'phonecode' => 49],
            ['id' => 7, 'code' => 'FR', 'name' => 'France', 'phonecode' => 33],
            ['id' => 8, 'code' => 'JP', 'name' => 'Japan', 'phonecode' => 81],
            ['id' => 9, 'code' => 'CN', 'name' => 'China', 'phonecode' => 86],
            ['id' => 10, 'code' => 'BR', 'name' => 'Brazil', 'phonecode' => 55],
        ];
        DB::table('countries')->insert($countries);
    }
}
