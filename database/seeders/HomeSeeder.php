<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::truncate();

        $home = new Home;
        $home->title = '';
        $home->short_description = 'Enter your short description';
        $home->phone_number = 'Your Phone Number';
        $home->save();
    }
}
