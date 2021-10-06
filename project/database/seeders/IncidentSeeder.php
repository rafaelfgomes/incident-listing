<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incidents = [
            [
                'title' => 'Passagem padrão original de Lorem Ipsum, usada desde o século XVI',
                'description' => 
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'criticality_id' => 1,
                'type_id' => 1,
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
            [
                'title' => 'Passagem padrão original de Lorem Ipsum, usada desde o século XVI',
                'description' => 
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'criticality_id' => 2,
                'type_id' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Passagem padrão original de Lorem Ipsum, usada desde o século XVI',
                'description' => 
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'criticality_id' => 3,
                'type_id' => 3,
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];

        DB::table('incidents')->insert($incidents);
    }
}
