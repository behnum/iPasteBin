<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
    public function home()
    {
      $data = array (
        'title' => 'Home'
      );
      return view('pages.home', compact('data'));
    }

    public function about()
    {
      $data = array (
        'title' => 'About'
      );
      return view('pages.about', compact('data'));
    }
}
