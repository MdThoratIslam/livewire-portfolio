<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('divisions')->insert([
            [
                'id'            => 1,
                'en_name'       => 'Dhaka',
                'bn_name'       => 'ঢাকা',
                'slug'          => 'dhaka',
                'status_active' => 1,
                'is_delete'     => 0,
                'created_at'    => '2024-09-25 16:50:00',
                'updated_at'    => '2024-09-25 16:50:00'
            ],
            [
                'id'            => 2,
                'en_name'       => 'Chattogram',
                'bn_name'       => 'চট্টগ্রাম',
                'slug'          => 'chattogram',
                'status_active' => 1,
                'is_delete'     => 0,
                'created_at'    => '2024-09-25 16:50:00',
                'updated_at'    => '2024-09-25 16:50:00'
            ],
            [
                'id'            => 3,
                'en_name'       => 'Khulna',
                'bn_name'       => 'খুলনা',
                'slug'          => 'khulna',
                'status_active' => 1,
                'is_delete'     => 0,
                'created_at'    => '2024-09-25 16:50:00',
                'updated_at'    => '2024-09-25 16:50:00'
            ],
            [
                'id'            => 4,
                'en_name'       => 'Rajshahi',
                'bn_name'       => 'রাজশাহী',
                'slug'          => 'rajshahi',
                'status_active' => 1,
                'is_delete'     => 0,
                'created_at'    => '2024-09-25 16:50:00',
                'updated_at'    => '2024-09-25 16:50:00'
            ],
            [
                'id'            => 5,
                'en_name'       => 'Sylhet',
                'bn_name'       => 'সিলেট',
                'slug'          => 'sylhet',
                'status_active' => 1,
                'is_delete'     => 0,
                'created_at'    => '2024-09-25 16:50:00',
                'updated_at'    => '2024-09-25 16:50:00'
            ],
            [
                'id'            => 6,
                'en_name'       => 'Barishal',
                'bn_name'       => 'বরিশাল',
                'slug'          => 'barishal',
                'status_active' => 1,
                'is_delete'     => 0,
                'created_at'    => '2024-09-25 16:50:00',
                'updated_at'    => '2024-09-25 16:50:00'
            ],
            [
                'id'            => 7,
                'en_name'       => 'Mymensingh',
                'bn_name'       => 'ময়মনসিংহ',
                'slug'          => 'mymensingh',
                'status_active' => 1,
                'is_delete'     => 0,
                'created_at'    => '2024-09-25 16:50:00',
                'updated_at'    => '2024-09-25 16:50:00'
            ],
            [
                'id'            => 8,
                'en_name'       => 'Rangpur',
                'bn_name'       => 'রংপুর',
                'slug'          => 'rangpur',
                'status_active' => 1,
                'is_delete'     => 0,
                'created_at'    => '2024-09-25 16:50:00',
                'updated_at'    => '2024-09-25 16:50:00'
            ],
        ]);
    }
}
