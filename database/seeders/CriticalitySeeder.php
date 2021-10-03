<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriticalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criticalities')->insert([
            [
                'name' => 'Alta',
            ],
            [
                'name' => 'Média',
            ],
            [
                'name' => 'Baixa',
            ]
        ]);
    }
}
