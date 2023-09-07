<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AdminLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('admin_labs')->insert([
        //     'user_id' => 2, //johndoe
        //     'lab_id' => 1, //iot
        //     'is_head_admin' => true,
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        DB::table('admin_labs')->insert([
            'user_id' => 4,
            'lab_id' => 1, //iot
            'is_head_admin' => false,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('admin_labs')->insert([
            'user_id' => 5,
            'lab_id' => 2, //iot
            'is_head_admin' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('admin_labs')->insert([
            'user_id' => 8,
            'lab_id' => 3, //iot
            'is_head_admin' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
