<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;
use Illuminate\Support\Carbon;
class ResumeController extends Controller
{
    //
    public function ResumeSetup(){
        return view('admin.resume_setup.resume_setup');
    }

    public function ResumeAll(){
        $resume = Resume::latest()->get();
        return view('admin.resume_setup.all_resume',compact('resume'));
    }

    public function StoreResume(Request $request){
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        Resume::insert([
            'category' => $request->category,
            'title' => $request->title,
            'date' => $request->date,
            'location' => $request->location,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Resume Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('resume.all')->with($notification);
    }

    public function ResumeEdit($id){
        $resume = Resume::findOrFail($id);
        return view('admin.resume_setup.resume_edit',compact('resume'));
    }

    public function UpdateResume(Request $request){

        $resume_id = $request->id;
        Resume::findOrFail($resume_id)->update([
            'category' => $request->category,
            'title' => $request->title,
            'date' => $request->date,
            'location' => $request->location,
            'description' => $request->description,
            
        ]);

        $notification = array(
            'message' => 'Resume Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('resume.all')->with($notification);
    }

    public function DeleteResume($id){
        $resume = Resume::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Resume Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('resume.all')->with($notification);
    }
}
