<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class SkillController extends Controller
{
    //
    public function SkillSetup(){
        return view('admin.skill_setup.skill_setup');
    }

    public function show(){

        $userId = Auth::user()->id;

        $skill = Skill::query()
                ->where('user_id', $userId)
                ->get();

        return view('admin.skill_setup.all_skill',compact('skill'));
    }

    public function store(Request $request){


        $request->validate([
            'language' => 'required',
            'level' => 'required',
        ]);

        Skill::insert([
            'language' => $request->language,
            'level' => $request->level,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Skill Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('skill.show')->with($notification);
    }


    public function edit($id){

        $skill = Skill::findOrFail($id);

        return view('admin.skill_setup.skill_edit',compact('skill'));
    }

    public function update(Request $request){

        $skill_id = $request->id;
        $userId = Auth::user()->id;

        Skill::findOrFail($skill_id)->update([
            'language' => $request->language,
            'level' => $request->level,
            'user_id' => $userId
        ]);

        $notification = array(
            'message' => 'Skill Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('skill.all')->with($notification);
    }

    public function destroy($id){
        $skill = Skill::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Skill Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('skill.all')->with($notification);
    }

    /* Frontend */
    // public function FrontSkill(){
    //     $skill = Skill::latest()->get();
    //     return view('frontend.body.skill_all.skill_setup',compact('skill'));
    // }
}
