<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
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
    
     public function consultations(){
    	return view('supervisor.consultations');
    }

    public function reports(){
    	return view('supervisor.reports');
    }

    public function panel(){
    	return view('supervisor.panel');
    }
}