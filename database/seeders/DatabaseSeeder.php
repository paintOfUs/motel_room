<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'user_name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('123456'),
            'role'  => 0],
            );

        DB::table('users')->insert([['user_name'=> 'tester',
        'email'=> 'test123@gmail.com',
        'password'=> Hash::make('123456'),
        'role' => 1]]);

        DB::table('users')->insert([['user_name'=> 'Nguyễn Long',
        'email'=> 'long@gmail.com',
        'img'=>'https://leplateau.edu.vn/wp-content/uploads/2023/10/hinh-anh-con-gai-1.jpg',
        'password'=> Hash::make('123456'),
        'role' => 1]]);

        DB::table('users')->insert([['user_name'=> 'Nhật ÁNH',
        'email'=> 'ANH123@gmail.com',
        'img'=>'https://vsmall.vn/wp-content/uploads/2022/06/hinh-anh-con-gai-cute-de-thuong-cute-anime-hoat-hinh-xinh.jpg',
        'password'=> Hash::make('123456'),
        'role' => 1]]);

        DB::table('users')->insert([['user_name'=> 'Học Bá',
        'email'=> 'ba123@gmail.com',
        'img'=>'https://vsmall.vn/wp-content/uploads/2022/06/hinh-anh-con-gai-cute-de-thuong-cute-anime-hoat-hinh-xinh.jpg',
        'password'=> Hash::make('123456'),
        'role' => 1]]);

        DB::table('users')->insert([['user_name'=> 'Thùy Linh',
        'email'=> 'linh123@gmail.com',
        'img'=>'https://vsmall.vn/wp-content/uploads/2022/06/hinh-anh-con-gai-cute-de-thuong-cute-anime-hoat-hinh-xinh.jpg',
        'password'=> Hash::make('123456'),
        'role' => 1]]);

        DB::table('users')->insert([['user_name'=> 'Nhật Nam',
        'email'=> 'nam123@gmail.com',
        'password'=> Hash::make('123456'),
        'role' => 1]]);

        DB::table('users')->insert([['user_name'=> 'Gia Long',
        'email'=> 'gialong@gmail.com',
        'password'=> Hash::make('123456'),
        'role' => 1]]);
    }
}
