<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceRequest;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResourceController extends Controller
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
        $resources = Resource::all();
        return view('resources.index',compact('resources'));
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
    public function store(ResourceRequest $request)
    {
        //check if the request has file
        if($request->hasFile('file') && $request->file('file')->isValid()){
            $file = $request->file;
            $newFileName = date('Ymd_His').'_resource.'.$file->getClientOriginalExtension();
            // Save the file
            $path = $file->storeAs('public/uploads/resources', $newFileName);

            Resource::create([
              'name'=>$request->name,
              'file'=>$newFileName,
              'user_id'=>Auth::id(),
           ]);
        }else{
            abort(500);
        }

        return redirect()->route('resources.index')->with('message','One Resource Created succssfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        return view('resources.show',compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        return view('resources.edit',compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(ResourceRequest $request, Resource $resource)
    {
        //check if the request has file
        if($request->hasFile('file') && $request->file('file')->isValid()){
            $file = $request->file;
            $newFileName = date('Y_m_d_His').'_resource.'.$file->getClientOriginalExtension();
            // Save the file
            $path = $file->storeAs('uploads/resources', $newFileName);

            Resource::update([
              'name'=>$request->name,
              'file'=>$newFileName,
              'user_id'=>Auth::id(),
           ]);
        }else{
            abort(500);
        }

        return redirect()->route('resources.index')->with('message','One Resource updated succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        //
    }
}
