<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use App\Category;
use Session;
use Image;
use Storage;
use Input;

class PagesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
      $categories = Category::all();
      return view('admin.pages.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
      $page = new Page;

      if ($request->hasFile('image')) {
        $this->validate($request, [
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      $image = $request->file('image');
      $filename = $page->id . '.' . Input::file('image')->getClientOriginalExtension();
      $location = public_path('images/' . $filename);
      Image::make(Input::file('image'))->resize(1500, 800)->save($location);
      $page->image = $filename;
      }



      $this->validate($request, [
        'title' => 'required|max:225|min:5',
        'slug' => 'required|alpha_dash|min:5|max:255|unique:pages,slug',
        'description' => 'required|min:5',
        'category_id' => 'required|integer'
      ]);


      $page->description = $request->input('description');
      $page->category_id = $request->input('category_id');
      $page->title = $request->input('title');
      $page->slug = $request->input('slug');

      $page->save();
      return redirect('admin/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
      $page = Page::find($id);
      $categories = Category::all();
      return view('admin.pages.show', compact('page', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
      $page = Page::find($id);
      $categories = Category::all();
      return view('admin.pages.edit', compact('page'))->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
      $requestData = $request->all();
      $page = Page::findOrFail($id);
      $image = Input::file('image');
      $filename  = $page->id . '.' . Input::file('image')->getClientOriginalExtension();
      $location = public_path('images/' . $filename);
      Image::make(Input::file('image'))->resize(1500, 800)->save($location);

      if ($request->input('slug') == $page->slug) {
      $this->validate($request, array(
        'title' => 'required|max:225|min:5',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'description' => 'required|min:5',
        'category_id' => 'required|integer'
        ));
      } else {
      $this->validate($request, [
        'title' => 'required|max:225|min:5',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'slug' => 'required|alpha_dash|min:5|max:255|unique:pages,slug',
        'description' => 'required|min:5',
        'category_id' => 'required|integer'
      ]);}

      $page->image = $filename;
      $page->description = $request->input('description');
      $page->category_id = $request->input('category_id');
      $page->slug = $request->input('slug');
      $page->title = $request->input('title');
      $page->save($requestData);
      return redirect('admin/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
      Page::destroy($id);
      return redirect('admin/pages');
    }


}
