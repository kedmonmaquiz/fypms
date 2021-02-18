<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStatusRequest;
use App\Models\ProjectStatus;
use Illuminate\Http\Request;

class ProjectStatusController extends Controller
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
        $projectStatuses = ProjectStatus::all();
        return view('project_statuses.index',compact('projectStatuses'));
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
    public function store(ProjectStatusRequest $request)
    {
        $inputs = $request->all();
        $role = ProjectStatus::create($inputs);
        return redirect()->back()->with('message','One Status Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectStatus  $projectStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectStatus $projectStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectStatus  $projectStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectStatus $projectStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectStatus  $projectStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectStatus $projectStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectStatus  $projectStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectStatus $projectStatus)
    {
        //
    }
}
