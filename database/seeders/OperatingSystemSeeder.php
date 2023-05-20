<?php

namespace Database\Seeders;

use App\Models\OperatingSystem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperatingSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //clear table 
        OperatingSystem::truncate();

        DB::table('operating_systems')->insert([
            ["name" => "Linux"],
            ["name" => "macOS"],
            ["name" => "Windows"],
        ]);
    }
}
