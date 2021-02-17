<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
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
        $announcements = Announcement::all();
        return view('announcements.index',compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementRequest $request)
    {
        //check if the request has file
        if($request->hasFile('file') && $request->file('file')->isValid()){
            $file = $request->file;
            $newFileName = date('Y_m_d_His').'_announcement.'.$file->getClientOriginalExtension();
            // Save the file
            $path = $file->storeAs('public/uploads/announcements', $newFileName);

            Announcement::create([
              'title'=>$request->title,
              'body'=>$request->body,
              'user_id'=>Auth::id(),
              'file'=>$newFileName,
           ]);
        }else{
            Announcement::create([
              'title'=>$request->title,
              'body'=>$request->body,
              'user_id'=>Auth::id(),
          ]);
        }

        return redirect()->route('announcements.index')->with('message','One Announcement Created succssfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        return view('announcements.show',compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('announcements.edit',compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(AnnouncementRequest $request, Announcement $announcement)
    {
         //check if the request has file
        if($request->hasFile('file') && $request->file('file')->isValid()){
              $file = $request->file('file');
              $newFileName = date('Y_m_d_His').'_announcement.'.$file->getClientOriginalExtension();
              $path = $file->storeAs('uploads/announcements', $newFileName);
              //update filename to database
              $announcement->update([
                'title'=>$request->title,
                'body' =>$request->body,
                'user_id'=>Auth::id(),
                'file'=>$newFileName,
               ]);            
          }else{
                $announcement->update([[
                  'title'=>$request->title,
                  'body' =>$request->body,
                  'user_id'=>Auth::id(),
                ]]);
          }

        return redirect()->route('announcements.index')->with('message','One Announcement Updated succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->route('announcements.index')->with('message','One Announcement Deleted succssfully');
    }
}
