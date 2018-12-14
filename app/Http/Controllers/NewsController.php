<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Profile;
class NewsController extends Controller
{
  public function index(Request $request)
  {
      $posts = News::all()->sortByDesc('updated_at');
      if (count($posts) > 0) {
          $headline = $posts->shift();
      } else {
          $headline = null;
      }
      return view('news.index', ['headline' => $headline, 'posts' => $posts]);
  }
  public function profile(Request $request) {
    $profiles = Profile::all()->sortByDesc('updated_at');
    return view('news.profile', ['profiles' => $profiles]);
  }
}