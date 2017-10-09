<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
use Session;
use App\Category;
use App\Page;
use App\Tutorial;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct() {
       $this->middleware('auth');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $sectionId)
    {
      $page = Page::find($id);
      $section = Section::find($sectionId);
      return view('tutorial.create', compact('page', 'section'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, $sectionId, Request $request)
    {
      $page = Page::find($id);
      $section = Section::find($sectionId);

      $tutorial = new Tutorial;

      $tutorial->content = $request->input('content');
      $tutorial->section_id = $sectionId;
      $tutorial->save();

      return redirect('admin/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($id, $sectionId)
    {
      $page = Page::find($id);
      $section = Section::find($sectionId);
      return view('tutorial.show', compact('page', 'section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $sectionId)
    {
      $page = Page::find($id);
      $section = Section::find($sectionId);
      return view('tutorial.edit', compact('page', 'section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, $sectionId, Request $request)
    {

      $page = Page::find($id);
      $section = Section::find($sectionId);
      $tutorial = Tutorial::findOrFail($id);

      $tutorial->content = $request->input('content');
      $tutorial->section_id = $sectionId;
      $tutorial->save();
      return redirect('admin/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $sectionId)
    {
      $tutorial = Tutorial::find($id);
      $tutorial->delete();
      return redirect()->back();
    }
}
