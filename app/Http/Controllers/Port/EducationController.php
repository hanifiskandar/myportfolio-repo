<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;


class EducationController extends Controller
{

    public function setup()
    {

        return view('admin.education_setup.education_setup');
    }

    public function show()
    {

        $userId = Auth::id();

        $education = Education::query()
            ->where('user_id', $userId)
            ->get();

        return view('admin.education_setup.all_education', compact('education'));
    }


    public function store(Request $request)
    {

        $this->validateData($request);

        $education = new Education;
        $education->user_id = $request->user_id;
        $education->course = $request->course;
        $education->institution = $request->institution;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->course_highlight = $request->course_highlight;
        $education->is_finished = $request->is_finished === 'on';
        $education->save();

        $notification = array(
            'message' => 'Education Saved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('education.show')->with($notification);
    }


    public function edit($id)
    {

        $education = Education::findOrFail($id);

        return view('admin.education_setup.education_edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $this->validateData($request);

        $education = Education::find($id);
        $education->user_id = $request->user_id;
        $education->course = $request->course;
        $education->institution = $request->institution;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->course_highlight = $request->course_highlight;
        $education->is_finished = $request->is_finished === 'on';
        $education->save();

        $notification = array(
            'message' => 'Education Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('education.show')->with($notification);
    }

    public function destroy($id)
    {
        $education = Education::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Education Delete Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }

    private function validateData(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'institution' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'course_highlight' => 'required',
        ]);
    }

}
