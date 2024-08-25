<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Auth;


class WorkExperienceController extends Controller
{

    public function setup()
    {

        return view('admin.work_experience_setup.work_experience_setup');
    }

    public function show()
    {

        $userId = Auth::id();
        
        $workExperience = WorkExperience::query()
            ->where('user_id', $userId)
            ->get();

        return view('admin.work_experience_setup.all_work_experience', compact('workExperience'));
    }


    public function store(Request $request)
    {
        \Log::debug("Work Experience");
        \Log::debug($request->all());
        $this->validateData($request);
        \Log::debug("siss'");

        $workExperience = new WorkExperience;
        $workExperience->user_id = $request->user_id;
        $workExperience->position = $request->position;
        $workExperience->company_name = $request->company_name;
        $workExperience->start_date = $request->start_date;
        $workExperience->end_date = $request->end_date;
        $workExperience->description = $request->description;
        $workExperience->is_role = $request->is_role === 'on';
        $workExperience->save();

        $notification = array(
            'message' => 'Work Experience Saved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('work-experience.show')->with($notification);
    }


    public function edit($id)
    {

        $workExperience = WorkExperience::findOrFail($id);

        return view('admin.work_experience_setup.work_experience_edit', compact('workExperience'));
    }

    public function update(Request $request, $id)
    {
        $this->validateData($request);

        $workExperience = WorkExperience::find($id);
        $workExperience->position = $request->position;
        $workExperience->company_name = $request->company_name;
        $workExperience->start_date = $request->start_date;
        $workExperience->end_date = $request->end_date;
        $workExperience->description = $request->description;
        $workExperience->is_role = $request->is_role;
        $workExperience->save();

        $notification = array(
            'message' => 'Work Experience Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('work-experience.show')->with($notification);
    }

    public function destroy($id)
    {
        $workExperience = WorkExperience::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Work Experience Delete Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }

    private function validateData(Request $request)
    {
        $request->validate([
            'position' => 'required',
            'company_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);
    }

    // public function WorkDetail($id)
    // {
    //     $work = Work::findOrFail($id);
    //     return view('frontend.work_details', compact('work'));
    // }
}
