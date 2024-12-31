<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $states = [
            // United States
            ['id' => 1, 'country_id' => 1, 'name' => 'California', 'code' => 'CA'],
            ['id' => 2, 'country_id' => 1, 'name' => 'New York', 'code' => 'NY'],
            ['id' => 3, 'country_id' => 1, 'name' => 'Texas', 'code' => 'TX'],
            
            // India
            ['id' => 4, 'country_id' => 2, 'name' => 'Maharashtra', 'code' => 'MH'],
            ['id' => 5, 'country_id' => 2, 'name' => 'Delhi', 'code' => 'DL'],
            ['id' => 6, 'country_id' => 2, 'name' => 'Karnataka', 'code' => 'KA'],
            
            // Canada
            ['id' => 7, 'country_id' => 5, 'name' => 'Ontario', 'code' => 'ON'],
            ['id' => 8, 'country_id' => 5, 'name' => 'Quebec', 'code' => 'QC'],
            ['id' => 9, 'country_id' => 5, 'name' => 'British Columbia', 'code' => 'BC'],
        ];
        DB::table('states')->insert($states);
    }
}
