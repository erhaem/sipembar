<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Rifqi',
            'username' => 'rifqi',
            'email' => 'rifqi@live.com',
            'password' => Hash::make('admin'),
            'role' => 'super_admin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'John Doe',
            'username' => 'johndoe',
            'email' => 'john@doe.com',
            'password' => Hash::make('12345'),
            'role' => 'admin_lab',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Haidar',
            'username' => 'haidar',
            'email' => 'haidar@live.com',
            'password' => Hash::make('12345'),
            'role' => 'student',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Saul D. Jaguar',
            'username' => 'saul',
            'email' => 'saul@live.com',
            'password' => Hash::make('12345'),
            'role' => 'admin_lab',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Asep Siregar',
            'username' => 'asep',
            'email' => 'asep@live.com',
            'password' => Hash::make('12345'),
            'role' => 'admin_lab',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Donquixote Rosinante',
            'username' => 'rosinante',
            'email' => 'rosinante@live.com',
            'password' => Hash::make('12345'),
            'role' => 'student',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Vergo Anak Manja',
            'username' => 'vergo',
            'email' => 'vergo@live.com',
            'password' => Hash::make('12345'),
            'role' => 'student',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Ucok Manurung',
            'username' => 'ucok',
            'email' => 'ucok@live.com',
            'password' => Hash::make('12345'),
            'role' => 'admin_lab',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
