<?php

namespace App\Http\Controllers\Port;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\PersonalDetail;
use App\Models\Skill;
use App\Models\WorkExperience;
use App\Models\Education;


class PdfController extends Controller
{
    // Method to download PDF
    public function download(Request $request)
    {
        // Get your data here
        $data = $this->getData();

        // Load the view and pass the data
        $pdf = PDF::loadView('my_resume_pdf', $data);

        // Return the generated PDF to the user
        return $pdf->download('my_resume.pdf');
    }

    // Method to view PDF in browser
    public function view(Request $request)
    {
        // Get your data here
        $data = $this->getData();

        // Load the view and pass the data
        $pdf = PDF::loadView('my_resume_pdf', $data);

        // Return the generated PDF to view in the browser
        return $pdf->stream('my_resume.pdf');
    }

    // Optional: Method to get the course data
    private function getData()
    {
        $userId = auth()->id();

        $myresume = User::with('personal_detail', 'skills', 'work_experiences', 'educations')
                    ->where('id', $userId)            
                    ->get();

        return ['myresume' => $myresume];
    }
}
