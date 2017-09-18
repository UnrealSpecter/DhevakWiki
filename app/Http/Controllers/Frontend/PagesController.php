<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;

class PagesController extends Controller
{
  public function index()
 {
   $pages = Page::paginate(6);
   return view('pages.welcome')->withPages($pages);
 }

 public function tutorial($id)
  {
    $pages = Page::find($id);
    return view('tutorial.single')->withPages($pages);
  }

  public function admin()
 {
   $pages = Page::paginate(6);
   return view('pages.overview')->withPages($pages);
 }
}
