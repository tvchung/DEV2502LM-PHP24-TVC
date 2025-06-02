<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class VattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // //
        // DB::table('vattu')->insert([
        //     'MaVTu'=>'DD01',
        //     'TenVTu'=>'Đầu DVD Hitachi 1 cửa',
        //     'DvTinh'=>'Bộ',
        //     'PhanTram'=>40,
        // ]);

        // Tạo đối tượng Factory
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            $code="";
            if($index<10)
                $code="00".$index;
            else if($index<100)
                $code="0".$index;
            else
                $code = $index;

            DB::table('vattu')->insert([
                'MaVTu'=>"V".$code,
                'TenVTu'=>$faker->text(55),
                'DvTinh'=>$faker->word(3),
                'PhanTram'=>$faker->randomDigit(10),
            ]);
        }
    }
}

