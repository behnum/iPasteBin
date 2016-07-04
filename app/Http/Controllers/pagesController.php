<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;


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

    public function save() {
      $iText = Request::input('iText');

      $data = array (
        'title' => 'Saved', //todo: Implement this
        'iText' => $iText,
      );
      
      return view('pages.home', compact('data'));
    }
}
