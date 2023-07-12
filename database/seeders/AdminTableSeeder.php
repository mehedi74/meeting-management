<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminReecords= [
            [
                'name'=>'admin',
                'mobile'=>'12345678',
                'email'=>'admin@gmail.com',
                'password'=>'$2y$10$EF5P0m2FMcVJ8OWvxW.yie1e63dFTHxceFO1gvOFzIr/eXeNZ8N/y',
                'image'=>'',
                'status'=>1,
            ],
        ];
        Admin::insert($adminReecords);
    }
}
