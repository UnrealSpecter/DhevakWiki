<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use App\Category;
use App\Section;
use App\Tutorial;

class PagesController extends Controller
{
  public function index()
 {
   $pages = Page::paginate(6);
   return view('pages.welcome')->withPages($pages);
 }

 public function tutorial($slug)
  {
    $pages = Page::where('slug', $slug)->first();
    $categories = Category::all();
    return view('tutorial.single')->withPages($pages);;
  }

  public function admin()
 {
   $pages = Page::paginate(6);
   return view('pages.overview')->withPages($pages);
 }
}
