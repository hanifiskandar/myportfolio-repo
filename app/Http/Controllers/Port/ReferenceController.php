<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reference;
use Illuminate\Support\Facades\Auth;


class ReferenceController extends Controller
{

    public function setup()
    {

        return view('admin.reference_setup.reference_setup');
    }

    public function show()
    {

        $userId = Auth::id();

        $reference = Reference::query()
            ->where('user_id', $userId)
            ->get();

        return view('admin.reference_setup.all_reference', compact('reference'));
    }


    public function store(Request $request)
    {

        try {
            $this->validateData($request);

            $reference = new Reference();
            $reference->user_id = $request->user_id;
            $reference->name = $request->name;
            $reference->position = $request->position;
            $reference->email = $request->email;
            $reference->phone = $request->phone;
            $reference->save();

            $notification = array(
                'message' => 'Reference Saved Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('reference.show')->with($notification);
        } catch (\Illuminate\Validation\ValidationException $e) {

            return redirect()->back()->withErrors($e->validator)->withInput()->with([
                'message' => 'Please fill in all mandatory fields',
                'alert-type' => 'error'
            ]);
        }
    }


    public function edit($id)
    {

        $reference = Reference::findOrFail($id);

        return view('admin.reference_setup.reference_edit', compact('reference'));
    }

    public function update(Request $request, $id)
    {
        
        try {
            $this->validateData($request);

            $reference = Reference::find($id);
            $reference->user_id = $request->user_id;
            $reference->name = $request->name;
            $reference->position = $request->position;
            $reference->email = $request->email;
            $reference->phone = $request->phone;
            $reference->save();

            $notification = array(
                'message' => 'Reference Update Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('reference.show')->with($notification);

        } catch (\Illuminate\Validation\ValidationException $e) {

            return redirect()->back()->withErrors($e->validator)->withInput()->with([
                'message' => 'Please fill in all mandatory fields',
                'alert-type' => 'error'
            ]);
        }
    }

    public function destroy($id)
    {
        $reference = Reference::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Reference Delete Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }

    private function validateData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
    }
}
