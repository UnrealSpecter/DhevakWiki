<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
use Session;
use App\Category;
use App\Page;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct() {
       $this->middleware('auth');
     }

    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $page = Page::find($id);

      return view('sections.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
      $this->validate($request, array(
        'name' => 'required|max:255|min:5'
      ));

        //   Dit kan niet omdat hij probeert het object aan te maken met alles wat in de request staat. Dat is alleen de naam en niet de id.
        //   Dus je moet het handmatig doen vanaf een leeg object. Dan werkt het prima.
        //   $section = Section::create($request->all());
        //   $section->page_id = $id;
        //   $section->save();
        //   return redirect()->back();

        $section = new Section;
        $section->name = $request->name;
        $section->page_id = $id;
        $section->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($id)
    {
      $page = Page::find($id);
      $section = Section::all();
      return view('sections.show', compact('page', 'section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $page = Page::find($id);
      $section = Section::find($id);
      return view('sections.edit', compact('page', 'section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, array(
        'name' => 'required|max:255|min:5'
      ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { dd($id);
      $section = Section::find($id);
      $section->delete();
      return redirect()->back();
    }
}
