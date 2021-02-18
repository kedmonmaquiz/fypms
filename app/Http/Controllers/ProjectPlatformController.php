<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectPlatformRequest;
use App\Models\ProjectPlatform;
use Illuminate\Http\Request;

class ProjectPlatformController extends Controller
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
       $projectPlatforms = ProjectPlatform::all();
       return view('project_platforms.index',compact('projectPlatforms'));
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
    public function store(ProjectPlatformRequest $request)
    {
        $inputs = $request->all();
        $role = ProjectPlatform::create($inputs);
        return redirect()->back()->with('message','One Platform Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectPlatform  $projectPlatform
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectPlatform $projectPlatform)
    {
        return view('project_platforms.show',compact('projectPlatform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectPlatform  $projectPlatform
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectPlatform $projectPlatform)
    {
        return view('project_platforms.edit',compact('projectPlatform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectPlatform  $projectPlatform
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectPlatformRequest $request, ProjectPlatform $projectPlatform)
    {
        $inputs = $request->all();
        $projectPlatform->update($inputs);
        return redirect()->route('project_platforms.index')->with('message','One Platform updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectPlatform  $projectPlatform
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectPlatform $projectPlatform)
    {
        $projectPlatform->delete();
        return redirect()->route('project_platforms.index')->with('message','One Platform updated successfully');
    }
}
