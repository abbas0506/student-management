<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Level::create(['name' => 'Primary']);
        Level::create(['name' => 'Middle']);
        Level::create(['name' => 'Secondary']);
        Level::create(['name' => 'Itermediate']);
    }
}
