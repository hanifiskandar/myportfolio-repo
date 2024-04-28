<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;


class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        About::truncate();

        $about = new About;
        $about->title = '';
        $about->short_intro = '';
        $about->about_image = '';
        $about->birthday = '';
        $about->website = '';
        $about->phone = '';
        $about->city = '';
        $about->age = '';
        $about->degree = '';
        $about->email = '';
        $about->freelance = '';
        $about->long_intro = '';
        $about->save();
    }
}
