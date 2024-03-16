<?php

namespace Database\Seeders;

use App\Models\RecyclePlace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecyclePlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => "Công Ty TNHH Thu Gom Xử Lý Tái Chế Phế Liệu Hòa Đoàn",
                'address' => "594 Đ. An Dương Vương, Phường 10, Quận 6, Thành phố Hồ Chí Minh, Việt Nam",
                'contact' => "0123789456",
                'add_point' => "10.743169824916848, 106.62352296599894",
            ],
            [
                'name' => "Trạm Tái Sinh Aquafina - Lotte Mart Quận 7",
                'address' => "Lotte Mart, Quận 7, Thành phố Hồ Chí Minh, Việt Nam",
                'contact' => "0147258369",
                'add_point' => "10.741138849464848, 106.70205372871804",
            ],
            [
                'name' => "Trạm Tái Sinh Aquafina - Sheraton Hotel",
                'address' => "",
                'contact' => "0369258147",
                'add_point' => "10.775839107703469, 106.70421850662922",
            ],
            [
                'name' => "Replastic Workshop",
                'address' => "80 Đông Du, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh, Việt Nam",
                'contact' => "0625815357",
                'add_point' => "10.780718746069994, 106.66752010662924",
            ],
            [
                'name' => "Công Ty Tnhh Green Recycling",
                'address' => "Q10, 440 Đ. 3 Tháng 2, Phường 12, Quận 10, Thành phố Hồ Chí Minh 700000, Việt Nam",
                'contact' => "0987456123",
                'add_point' => "10.768895519119855, 106.66880254895817",
            ],


        ];
        foreach ($data as $d) {
            RecyclePlace::create($d);
        }
    }
}
