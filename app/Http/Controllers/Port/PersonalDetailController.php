<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalDetail;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;



class PersonalDetailController extends Controller
{

    public function show()
    {

        $userId = Auth::user()->id;
        $personalDetail = PersonalDetaiL::query()
            ->where('user_id', $userId)
            ->first();

        return view('admin.personal_detail_setup.personal_detail_setup_all', ['personal_detail' => $personalDetail]);
    }


    public function store(Request $request)
    {
        $userId = Auth::user()->id;

        \Log::debug("REQUEST");
        \Log::debug($request->all());
        // dd();
        if ($request->file('about_image')) {
            \Log::debug("qwdwq");
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //3434343443.jpg
            Image::make($image)->resize(768, 1024)->save('upload/about_images/' . $name_gen);
            $save_url = 'upload/about_images/' . $name_gen;

            $personalDetail = new PersonalDetail;
            $personalDetail->user_id = $userId;
            $personalDetail->title = $request->title;
            $personalDetail->summary = $request->summary;
            $personalDetail->job = $request->job;
            $personalDetail->about_image = $save_url;
            $personalDetail->age = $request->age;
            $personalDetail->city = $request->city;
            $personalDetail->freelance = $request->freelance;
            $personalDetail->save();

            $notification = array(
                'message' => 'About Update with image Successfully',
                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);

        }

    }
}
