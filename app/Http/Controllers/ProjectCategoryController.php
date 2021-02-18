<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectCategoryRequest;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
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
        $projectCategories = ProjectCategory::all();
        return view('project_categories.index',compact('projectCategories'));
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
    public function store(ProjectCategoryRequest $request)
    {
        $inputs = $request->all();
        $role = ProjectCategory::create($inputs);
        return redirect()->back()->with('message','One Category Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCategory $projectCategory)
    {
        return view('project_categories.show',compact('projectCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectCategory $projectCategory)
    {
        return view('project_categories.edit',compact('projectCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectCategoryRequest $request, ProjectCategory $projectCategory)
    {
        $inputs = $request->all();
        $projectCategory->update($inputs);
        return redirect()->route('project_categories.index')->with('message','One Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectCategory $projectCategory)
    {
        $projectCategory->delete();
        return redirect()->route('project_categories.index')->with('message','One Category deleted successfully');
    }
}
