<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function save(Request $request) {
      $iText = $request->iText;

      $data = array (
        'title' => 'Saved', //todo: Implement this
        'iText' => $iText,
      );
      
      return view('pages.home', compact('data'));
    }
}
