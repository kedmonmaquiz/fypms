<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function supervisor(){
        return view('student.supervisor');
    }

    public function project(){
        return view('student.project');
    }

    public function conceptNote(){
        return view('student.concept_note');
    }

    public function consultations(){
        return view('student.consultations');
    }

    public function reports(){
        return view('student.reports');
    }

    public function results(){
        return view('student.results');
    }
}
