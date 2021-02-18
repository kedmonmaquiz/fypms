<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportTypeRequest;
use App\Models\ReportType;
use Illuminate\Http\Request;

class ReportTypeController extends Controller
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
        $reportTypes = ReportType::all();
        return view('report_types.index',compact('reportTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportTypeRequest $request)
    {
        $inputs = $request->all();
        $role = ReportType::create($inputs);
        return redirect()->back()->with('message','One Report Type Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportType  $reportType
     * @return \Illuminate\Http\Response
     */
    public function show(ReportType $reportType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportType  $reportType
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportType $reportType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportType  $reportType
     * @return \Illuminate\Http\Response
     */
    public function update(ReportTypeRequest $request, ReportType $reportType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportType  $reportType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportType $reportType)
    {
        //
    }
}
