<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $tableNames = Schema::getConnection()
            ->getDoctrineSchemaManager()
            ->listTableNames();
        foreach ($tableNames as $name) {
            if(!str_contains($name,'oauth')) DB::table($name)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $this->call(PermissionRoleSeeder::class);
        $this->call(UserSeeder::class);


//        $this->call(CategoriesSeeder::class);

//        $this->call(ProductSeeder::class);

//        for ($i = 0; $i < 30; ++$i) {
//            // cà phê đóng gói
//            DB::insert(
//                "
//            INSERT INTO `products` (`id`, `name`, `thumb_image`, `category_id`, `description`, `content`, `price`, `created_at`, `updated_at`) VALUES
//            (" . $i + 61 . ", 'Tri Ân Thầy Cô {$i}', 'uploads/products/tri-an-thay-co.jpg', 1, 'Món quà ý nghĩa ngày nhà giáo', '<p>Khi mua trọn bộ &nbsp;<strong>Tri ân Thầy Cô</strong> Quý khách sẽ được<strong>&nbsp;Tặng kèm 1 phin nhôm nâu và 1 túi giấy đen</strong><br>
//            Thời gian khuyến mãi: từ hôm nay đến 30/11/2023 ( hoặc đến khi hết quà tặng).<br>
//            </p>
//              ', 337000, '2023-09-23 17:52:28', '2023-09-23 17:52:28')"
//            );
//        }
        $this->call(WasteDictionarySeeder::class);
    }
}
