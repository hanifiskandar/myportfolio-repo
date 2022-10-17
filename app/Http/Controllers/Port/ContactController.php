<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;


class ContactController extends Controller
{
    //

    // public function Contact(){
    //    return view('frontend.body.contact.contact_setup');
    // }

    public function ContactAll(){
        $contact = Contact::latest()->get();
        return view('admin.contact_setup.all_contact',compact('contact'));
    }

    public function StoreContact(Request $request){

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'subject' => 'required',
        //     'message' => 'required',
        // ]);

        Contact::insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Contact Submitted Successfully',
            'alert-type' => 'success'
        );

       
        return redirect()->back()->with($notification);
    }

    public function ContactDelete($id){
        $work = Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact Message is Deleted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }
}
