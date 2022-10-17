<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Carbon;

class SkillController extends Controller
{
    //
    public function SkillSetup(){
        return view('admin.skill_setup.skill_setup');
    }
    public function SkillAll(){
        $skill = Skill::latest()->get();
        return view('admin.skill_setup.all_skill',compact('skill'));
    }

    public function StoreSkill(Request $request){


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

        return redirect()->route('skill.all')->with($notification);
    }


    public function SkillEdit($id){
        $skill = Skill::findOrFail($id);
        return view('admin.skill_setup.skill_edit',compact('skill'));
    }

    public function UpdateSkill(Request $request){

        $skill_id = $request->id;

        Skill::findOrFail($skill_id)->update([
            'language' => $request->language,
            'level' => $request->level,
            
        ]);
        $notification = array(
            'message' => 'Skill Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('skill.all')->with($notification);
    }

    public function SkillDelete($id){
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
