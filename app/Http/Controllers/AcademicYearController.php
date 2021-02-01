<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcademicYearRequest;
use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academic_years = AcademicYear::all();
        return view('academic_years.index',compact('academic_years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademicYearRequest $request)
    {
        $academicYear = AcademicYear::create([
            'name'=>$request->name,
            'status' => 0,
            'description'=>$request->description,
        ]);
        return redirect()->back()->with('message','New Academic Year Added Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicYear $academicYear)
    {
        return view('academic_years.show',compact('academicYear'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicYear $academicYear)
    {
        return view('academic_years.edit',compact('academicYear'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function update(AcademicYearRequest $request, AcademicYear $academicYear)
    {
        $activeAcademicYear = AcademicYear::where('status',1)->first();
        $inputs = $request->all();
        $academicYear->update($inputs);
        return redirect()->route('academic_years.index')->with('message','One Academic Year updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicYear $academicYear)
    {
        $academicYear->delete();
        return redirect()->back()->with('message','One Academic Year Added Successfully!!');
    }
}
