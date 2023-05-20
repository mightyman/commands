<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //clear table 
        Platform::truncate();

        DB::table('platforms')->insert([
            ["name" => "Command Prompt (CMD)"],
            ["name" => "Command-line interface (CLI)"]
        ]);
    }
}
