<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Experiences;
use App\Models\Educations;
use App\Models\Skills;
use App\Models\PersonalDetails;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Projects::all();
        $experiences = Experiences::all();
        $educations = Educations::all();
        $skills = Skills::all();
        $personalDetails = PersonalDetails::first();

        return view('dashboard.index', compact(
            'projects',
            'experiences',
            'educations',
            'skills',
            'personalDetails'
        ));
    }
}
