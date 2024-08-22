<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;


class AboutController extends Controller
{
    //
    public function AboutSetup(){
        // $aboutsetup = About::find(1);
        // return view('admin.about_setup.about_setup_all',compact('aboutsetup'));
        // $aboutsetup = About::find(1);
        return view('admin.about_setup.about_setup_all');
    }

    public function StoreAbout(Request $request){
        $about_id = $request->id;
   
        if ($request->file('about_image')) {
           $image = $request->file('about_image');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); //3434343443.jpg
           Image::make($image)->resize(768,1024)->save('upload/about_images/'.$name_gen);
           $save_url = 'upload/about_images/'.$name_gen;

           About::findOrFail($about_id)->update([
            'title' => $request->title,
            'job' => $request->job,
            'short_intro' => $request->short_intro,
            'birthday' => $request->birthday,
            'website' => $request->website,
            'phone' => $request->phone,
            'city' => $request->city,
            'age' => $request->age,
            'degree' => $request->degree,
            'email' => $request->email,
            'freelance' => $request->freelance,
            'long_intro' => $request->long_intro,
            'about_image' => $save_url,
           ]);

           $notification = array(
            'message' => 'About Update with image Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
        }
        else{
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'job' => $request->job,
                'short_intro' => $request->short_intro,
                'birthday' => $request->birthday,
                'website' => $request->website,
                'phone' => $request->phone,
                'city' => $request->city,
                'age' => $request->age,
                'degree' => $request->degree,
                'email' => $request->email,
                'freelance' => $request->freelance,
                'long_intro' => $request->long_intro,
               
                
               ]);
    
               $notification = array(
                'message' => 'About Update without image Successfully',
                'alert-type' => 'success'
    
            );
            return redirect()->back()->with($notification);
    
        }
}
}