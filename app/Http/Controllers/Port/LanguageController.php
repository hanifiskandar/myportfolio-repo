<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class LanguageController extends Controller
{

    public function setup(){
        return view('admin.language_setup.language_setup');
    }

    public function show(){
        
        $userId = Auth::id();

        $language = Language::query()
                ->where('user_id', $userId)
                ->get();

        return view('admin.language_setup.all_language',compact('language'));
    }

    public function store(Request $request){

        $this->validateData($request);

        $language = new Language;
        $language->name = $request->name;
        $language->level = $request->level;
        $language->user_id = $request->user_id;
        $language->save();

        $notification = array(
            'message' => 'Language Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('language.show')->with($notification);
    }

    public function edit($id){

        $language = Language::findOrFail($id);

        return view('admin.language_setup.language_edit',compact('language'));
    }

    public function update(Request $request, $id){

        $this->validateData($request);

        $language = Language::find($id);
        $language->name = $request->name;
        $language->level = $request->level;
        $language->save();

        $notification = array(
            'message' => 'Language Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('language.show')->with($notification);
    }

    public function destroy($id){

        $language = Language::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Language Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('language.show')->with($notification);
    }

    private function validateData(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'level' => 'required|numeric|min:1|max:100',
        ]);
    }
}
