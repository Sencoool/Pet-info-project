<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet')->insert(array(
            [
                'name' => 'ชิวาว่า',
                'type_id' => 1,
            ],
            [
                'name' => 'บูลด็อก',
                'type_id' => 1,
            ],
            [
                'name' => 'โกลเด้น',
                'type_id' => 1,
            ],
            [
                'name' => 'สก็อตติชโฟลด์',
                'type_id' => 2,
            ],
            [
                'name' => 'แฮมสเตอร์',
                'type_id' => 3,
            ],
            [
                'name' => 'บริติชชอตแฮร์',
                'type_id' => 2,
            ],
            [
                'name' => 'เปอร์เซีย',
                'type_id' => 2,
            ],
            [
                'name' => 'ตะเภา',
                'type_id' => 3,
            ],
            [
                'name' => 'ฮัสกี้',
                'type_id' => 1,
            ],
            [
                'name' => 'ดัชชุน',
                'type_id' => 1,
            ],
        ));
    }
}
