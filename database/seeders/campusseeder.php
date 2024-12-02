<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class campusseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        campus::create([
            'code' => 'Echague',
            'description' => 'Echague Isabela'
        ]);

        campus::create([
            'code' => 'Cauayan',
            'description' => 'Cauayan Isabela'
        ]);
    }
}
