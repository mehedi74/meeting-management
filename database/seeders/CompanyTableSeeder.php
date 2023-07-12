<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companyReecords= [
            [
                'company_name'=>'Sony',
                'address'=>'Dhaka',
                'official_email'=>'sony@gmail.com',
                'phone_number'=>'0123456789',
                'web_address'=>'https://www.sony.net/',
            ],
        ];
        Company::insert($companyReecords);
    }
}
