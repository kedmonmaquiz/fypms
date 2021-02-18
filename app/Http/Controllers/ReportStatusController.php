<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportStatusRequest;
use App\Models\ReportStatus;
use Illuminate\Http\Request;

class ReportStatusController extends Controller
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
        $reportStatuses = ReportStatus::all();
        return view('report_statuses.index',compact('reportStatuses'));
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
    public function store(ReportStatusRequest $request)
    {
        $inputs = $request->all();
        $reportStatus = ReportStatus::create($inputs);
        return redirect()->back()->with('message','Report Status Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportStatus  $reportStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ReportStatus $reportStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportStatus  $reportStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportStatus $reportStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportStatus  $reportStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportStatus $reportStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportStatus  $reportStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportStatus $reportStatus)
    {
        //
    }
}
