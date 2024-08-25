<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;


class ContactController extends Controller
{

    public function setup(){

       return view('admin.contact_setup.contact_setup');
    }

    // public function ContactAll(){
    //     $contact = Contact::latest()->get();
    //     return view('admin.contact_setup.all_contact',compact('contact'));
    // }

    public function store(Request $request){

        $request->validate([
            'subject' => 'required',
        ]);

        $contact = new Contact;
        $contact->user_id = $request->user_id;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        $notification = array(
            'message' => 'Contact Submitted Successfully',
            'alert-type' => 'success'
        );

       
        return redirect()->back()->with($notification);
    }

    // public function destroy($id){

    //     $contact = Contact::findOrFail($id)->delete();

    //     $notification = array(
    //         'message' => 'Contact Message is Deleted Successfully',
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->back()->with($notification);
    // }
}
