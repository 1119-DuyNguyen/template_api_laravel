<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            Category::create([
                "name" => 'Test danh mục' . $i,
            ]);
        }
    }
}
