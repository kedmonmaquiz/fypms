<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConceptNoteRequest;
use App\Models\ConceptNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConceptNoteController extends Controller
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
        $conceptNotes = ConceptNote::all();
        return view('concept_notes.index',compact('conceptNotes'));
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
    public function store(ConceptNoteRequest $request)
    {
        if($request->hasFile('file') && $request->file('file')->isValid()){
            $file = $request->file;
            $newFileName = Auth::user()->username.'_'.date('Ymd_His').'_conceptnote.'.$file->getClientOriginalExtension();
            // Save the file
            $path = $file->storeAs('public/uploads/concept_notes', $newFileName);

            ConceptNote::create([
              'file'=>$newFileName,
              'user_id'=>Auth::id(),
           ]);
        }else{
            abort(500);
        }

        return redirect()->route('concept_notes.index')->with('message','Concept Note Uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConceptNote  $conceptNote
     * @return \Illuminate\Http\Response
     */
    public function show(ConceptNote $conceptNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConceptNote  $conceptNote
     * @return \Illuminate\Http\Response
     */
    public function edit(ConceptNote $conceptNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConceptNote  $conceptNote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConceptNote $conceptNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConceptNote  $conceptNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConceptNote $conceptNote)
    {
        //
    }
}
