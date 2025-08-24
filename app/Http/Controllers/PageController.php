<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Experiences;
use App\Models\Educations;
use App\Models\Skills;
use App\Models\PersonalDetails;

class PageController extends Controller
{
    public function home()
    {
        $personalDetails = PersonalDetails::first();
        $projects = Projects::latest()->take(6)->get();
        $skills = Skills::all();
        
        return view('pages.home', compact('personalDetails', 'projects', 'skills'));
    }

    public function about()
    {
        $personalDetails = PersonalDetails::first();
        $experiences = Experiences::orderBy('start_date', 'desc')->get();
        $educations = Educations::orderBy('start_date', 'desc')->get();
        
        return view('pages.about', compact('personalDetails', 'experiences', 'educations'));
    }

    public function projects()
    {
        $projects = Projects::latest()->paginate(9);
        return view('pages.projects', compact('projects'));
    }

    public function projectDetail($id)
    {
        $project = Projects::findOrFail($id);
        return view('pages.project-detail', compact('project'));
    }

    public function contact()
    {
        $personalDetails = PersonalDetails::first();
        return view('pages.contact', compact('personalDetails'));
    }

    public function sendMessage(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);

        // Here you can add logic to send email or store message
        // For example, you could use Laravel's Mail facade:
        // Mail::to('your@email.com')->send(new ContactFormMail($validatedData));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
