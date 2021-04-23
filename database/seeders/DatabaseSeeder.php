<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('nhanvien')->insert([
            array('manv'=>'NV01', 'matkhau' => '123', 'tendem'=>'Lâm Thị Mỹ','ten'=>'Châu'),
            array('manv'=>'NV02', 'matkhau' => '123', 'tendem'=>'Trần Thị Mỹ','ten'=>'Duyên'),
            array('manv'=>'NV03', 'matkhau' => '123', 'tendem'=>'Đổ Trọng','ten'=>'Hảo'),
          ]);
    }
}
