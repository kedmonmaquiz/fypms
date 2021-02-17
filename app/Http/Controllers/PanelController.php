<?php

namespace App\Http\Controllers;

use App\Http\Requests\PanelRequest;
use App\Models\AcademicYear;
use App\Models\Panel;
use Illuminate\Http\Request;

class PanelController extends Controller
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
        $active_year_id = AcademicYear::where('status',1)->first()->id;
        $panels = Panel::all();
        return view('panels.index',compact(['panels','active_year_id']));
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
    public function store(PanelRequest $request)
    {
        $inputs = $request->all();
        $panel = Panel::create($inputs);
        return redirect()->back()->with('message','New Panel Added Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function show(Panel $panel)
    {
        return view('panels.show',compact('panel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function edit(Panel $panel)
    {
        return view('panels.edit',compact('panel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function update(PanelRequest $request, Panel $panel)
    {
        $inputs = $request->all();
        $panel->update($inputs);
        return redirect()->back()->with('message','New Panel Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panel $panel)
    {
        $panel->delete();
        return redirect()->route('panels.index')->with('message','New Panel Updated Successfully!!');
    }
}
