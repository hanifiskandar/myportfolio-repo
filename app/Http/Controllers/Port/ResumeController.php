<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\PersonalDetail;
use App\Models\Skill;
use App\Models\WorkExperience;
use App\Models\Education;
use PDF;


class ResumeController extends Controller
{
    // Method to download PDF
    public function download(Request $request)
    {
        // Get your data here
        $data = $this->getData();

        
        $imagePath = public_path($data['resume']->personal_detail->image);
        $image = base64_encode(file_get_contents($imagePath));
    
        // Add image to data for the view
        $data['image'] = 'data:image/jpeg;base64,' . $image;

        // Load the view and pass the data
        $pdf = PDF::loadView('admin.resume.my_resume', $data);

        // Return the generated PDF to the user
        return $pdf->download('my_resume.pdf');
    }

    // Method to view PDF in browser
    public function view(Request $request)
    {
        // Get your data here
        $data = $this->getData();

        $imagePath = public_path($data['resume']->personal_detail->image);
        $image = base64_encode(file_get_contents($imagePath));
    
        // Add image to data for the view
        $data['image'] = 'data:image/jpeg;base64,' . $image;

        // Load the view and pass the data
        $pdf = PDF::loadView('admin.resume.my_resume', $data);

        // Return the generated PDF to view in the browser
        return $pdf->stream('my_resume.pdf');
    }

    public function showcase(Request $request){

        $data = $this->getData();

        
        $imagePath = public_path($data['resume']->personal_detail->image);
        $image = base64_encode(file_get_contents($imagePath));
    
        // Add image to data for the view
        $data['image'] = 'data:image/jpeg;base64,' . $image;

        // \Log::debug($data);


        return view('frontend.index',$data);
    }

    // Optional: Method to get the course data
    private function getData()
    {
        $userId = auth()->id();

        \DB::enableQueryLog();
        $resume = User::with('personal_detail', 'skills', 'work_experiences', 'educations','languages','references')
            ->where('id', $userId)
            ->first();
        \Log::debug(\DB::getQueryLog());

        return ['resume' => $resume];
    }
}
