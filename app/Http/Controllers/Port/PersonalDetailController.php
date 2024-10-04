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

        $userId = Auth::id();

        $personalDetail = PersonalDetail::query()
            ->where('user_id', $userId)
            ->first();

        return view('admin.personal_detail_setup.personal_detail_setup_all', ['personal_detail' => $personalDetail]);
    }

    public function store(Request $request)
    {
        try {
            $this->validateData($request); 

            $personalDetail = PersonalDetail::where('user_id', $request->user_id)->first();

            if (!$personalDetail) {
                $personalDetail = new PersonalDetail;
                $image_url = null;
            }

            $personalDetail->user_id = $request->user_id;
            $personalDetail->title = $request->title;
            $personalDetail->summary = $request->summary;
            $personalDetail->job = $request->job;
            $personalDetail->age = $request->age;
            $personalDetail->birthday = $request->birthday;
            $personalDetail->phone = $request->phone;
            $personalDetail->address = $request->address;
            $personalDetail->freelance = $request->freelance === 'Yes';
            $personalDetail->website = $request->website;
            $personalDetail->availability = $request->availability;
            $personalDetail->employment_type = $request->employment_type;
            $personalDetail->expected_salary = $request->expected_salary;

            if ($request->file('image')) {
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // Generate unique file name
                Image::make($image)->resize(768, 1024)->save(public_path('upload/personal_detail_images/' . $name_gen)); // Use public_path for better file management
                $image_url = 'upload/personal_detail_images/' . $name_gen;
                $personalDetail->image = $image_url;
            }

            $personalDetail->save(); 

            $notification = array(
                'message' => 'Personal Detail Saved Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification); 

        } catch (\Illuminate\Validation\ValidationException $e) {

            return redirect()->back()->withErrors($e->validator)->withInput()->with([
                'message' => 'Please fill in all mandatory fields',
                'alert-type' => 'error'
            ]);
        }
    }

    private function validateData(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'job' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
    }
    
}
