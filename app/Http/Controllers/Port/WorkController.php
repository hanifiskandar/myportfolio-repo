<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;
use PDO;

class WorkController extends Controller
{
    
    public function WorkSetup(){
        return view('admin.work_setup.work_setup');
    }

    public function StoreWork(Request $request){


        $request->validate([
            'title' => 'required',
            'intro' => 'required',
            'description' => 'required', 
            'image' => 'required',
        ]);
   
        if ($request->file('image')) {
           $image = $request->file('image');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); //3434343443.jpg
           Image::make($image)->resize(1599,1200)->save('upload/work_images/'.$name_gen);
           $save_url = 'upload/work_images/'.$name_gen;

           Work::insert([
            'title' => $request->title,
            'intro' => $request->intro,
            'description' => $request->description,
            'image' => $save_url,
            'created_at' => Carbon::now(),

           ]);

           $notification = array(
            'message' => 'Work insert with image Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('work.all')->with($notification);

    }
}

    public function WorkAll(){
        $work = Work::latest()->get();
        return view('admin.work_setup.all_work',compact('work'));
    }

    public function WorkEdit($id){
        $work = Work::findOrFail($id);
        return view('admin.work_setup.work_edit',compact('work'));
    }

    public function UpdateWork(Request $request){

        $work_id = $request->id;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); //3434343443.jpg
            Image::make($image)->resize(1599,1200)->save('upload/work_images/'.$name_gen);
            $save_url = 'upload/work_images/'.$name_gen;
 
            Work::findOrFail($work_id)->update([
             'title' => $request->title,
             'intro' => $request->intro,
             'description' => $request->description,
             'image' => $save_url,
             
 
            ]);
 
            $notification = array(
             'message' => 'Work update with image Successfully',
             'alert-type' => 'success'
 
         );
 
         return redirect()->route('work.all')->with($notification);
 
     }

     else{
        Work::findOrFail($work_id)->update([
            'title' => $request->title,
            'intro' => $request->intro,
            'description' => $request->description,


           ]);

           $notification = array(
            'message' => 'Work update without image Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('work.all')->with($notification);
     }
    }


    public function WorkDelete($id){
        $work = Work::findOrFail($id);
        $img = $work->image;
        unlink($img);
        /* image kat folder delete */

        Work::findOrFail($id)->delete();
        /* row kat db delete */
        $notification = array(
            'message' => 'Work is Deleted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

    public function WorkDetail($id){
        $work = Work::findOrFail($id);
        return view('frontend.work_details',compact('work'));
    }
}