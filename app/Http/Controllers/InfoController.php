<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use App\Models\Skill;
use App\Models\PersonalInfo;
use App\Models\Education;
use Illuminate\Http\Request;

class InfoController extends Controller
{
 public function resume()
    {
        $info = PersonalInfo::all();
        $skills = Skill::all();
        $educations = Education::all();
        $objectives = Objective::all();

        return view('resume', compact('info', 'skills', 'objectives', 'educations'));
    }
}