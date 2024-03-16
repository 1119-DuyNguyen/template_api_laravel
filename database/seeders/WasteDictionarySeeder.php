<?php

namespace Database\Seeders;

use App\Models\WasteDictionary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WasteDictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        WasteDictionary::factory()->count(5)->create();
    }
}
