@extends('app')
@section('content')

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">PasteBin.</a>
</div>
</div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
<div class="container">
<h1>PasteBin</h1>
<p>PasteBin is yet another simple tool that enables you to save your text snippets and share them.</p>
</div>
</div>

<div class="container">
<!-- Example row of columns -->
<div class="row">
  Content
</div>

</div> <!-- /container -->

<footer class="footer">
<div class="container">
  <p class="text-muted">&copy; 2016 Behinweb Inc.</p>
</div>
</footer>

@endsection
