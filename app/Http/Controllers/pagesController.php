<?php
  
namespace App\Http\Controllers;

use App\Note;
use Redirect;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home()
    {
      $data = array (
        'title' => 'Home',
      );
      return view('pages.home', compact('data'));
    }

    public function about()
    {
      $data = array (
        'title' => 'About',
      );
      return view('pages.about', compact('data'));
    }

    public function save(Request $request)
    {
      $iText = $request->iText;
      
      $data = array (
        'title' => 'Saved', //todo: Implement this
        'iText' => $iText,
      );
      
      $note = new Note;
      $note->note = $iText;

      $token = bin2hex(random_bytes(4)); // todo: needs improvement
      $note->url_token = $token;
      
      $note->save();

      return Redirect::to('note/' . $token);
    }

    public function show(Request $request, $token)
    {
      $note = Note::where('url_token', $token)->first();
      
      if ($note === NULL) {
        return 'Note not found'; //todo: redirect to a custom 404
      } else {

        $data = array (
          'title' => 'View Note', //todo: needs improvement
          'iText' => $note->note,
          'token' => $token,
        );
        return view('pages.view', compact('data'));
      }
    }

    public function update(Request $request, $token)
    {
      $note = Note::where('url_token', $token)->first();

      if ($note === NULL) {
        return 'Note not found'; //todo: redirect to a custom 404
      } else {
        $iText = $request->iText;
        $data = array (
          'title' => '(Updated) View Note', //todo: needs improvement
          'iText' => $iText,
          'token' => $token,
        );

        $note->note = $iText;
        $note->save();
        
      }

      return redirect()->back();
    }

}
