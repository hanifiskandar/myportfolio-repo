<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class SkillController extends Controller
{


    public function setup()
    {
        return view('admin.skill_setup.skill_setup');
    }

    public function show()
    {

        $userId = Auth::id();

        $skill = Skill::query()
            ->where('user_id', $userId)
            ->get();

        return view('admin.skill_setup.all_skill', compact('skill'));
    }

    public function store(Request $request)
    {
        try {
            $this->validateData($request);

            $skill = new Skill;
            $skill->language = $request->language;
            $skill->level = $request->level;
            $skill->user_id = $request->user_id;
            $skill->save();

            Skill::insert([
                'language' => $request->language,
                'level' => $request->level,
                'user_id' => $request->user_id,
            ]);


            $notification = array(
                'message' => 'Skill Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('skill.show')->with($notification);

        } catch (\Illuminate\Validation\ValidationException $e) {

            return redirect()->back()->withErrors($e->validator)->withInput()->with([
                'message' => 'Please fill in all mandatory fields',
                'alert-type' => 'error'
            ]);
        }
    }


    public function edit($id)
    {

        $skill = Skill::findOrFail($id);

        return view('admin.skill_setup.skill_edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {

        try {
            $this->validateData($request);

            $skill = Skill::find($id);
            $skill->language = $request->language;
            $skill->level = $request->level;
            $skill->save();

            $notification = array(
                'message' => 'Skill Update Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('skill.show')->with($notification);

        } catch (\Illuminate\Validation\ValidationException $e) {

            return redirect()->back()->withErrors($e->validator)->withInput()->with([
                'message' => 'Please fill in all mandatory fields',
                'alert-type' => 'error'
            ]);
        }
    }

    public function destroy($id)
    {

        $skill = Skill::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Skill Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('skill.show')->with($notification);
    }

    private function validateData(Request $request)
    {
        $request->validate([
            'language' => 'required|string',
            'level' => 'required|numeric|min:1|max:100',
        ]);
    }

}
