<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PersonalDetail;

class ResumeBuilderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();

        $data = [
            [
                'name' => 'Hanif Iskandar',
                'username' => 'hanif96',
                'email' => 'hanif96@gmail.com',
                'password' => '$2y$10$cbABrlVYqQaXSCJqJWY55.8GCWjntRfacITZDeZsWsTox8I2G72ve',
                'email_verified_at' => '2024-08-20 16:47:58',
                'role' => 'admin',
            ],
        ];

        //run seeder
        foreach($data as $item){

            User::create($item);

        }
    }
}
