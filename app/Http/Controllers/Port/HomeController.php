<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //

    public function HomeSetup()
    {
        $homesetup = Home::find(1);
        return view('admin.home_setup.home_setup_all', compact('homesetup'));
    }


    public function StoreHome(Request $request)
    {
        \Log::debug('store home');
        \Log::debug($request->all());
        $home_id = $request->id;

        Home::findOrFail($home_id)->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'phone_number' => $request->phone_number,

        ]);

        $notification = array(
            'message' => 'Home Setup Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }
}
