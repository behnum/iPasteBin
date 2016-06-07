@extends('app')
@section('content')
@include('includes.nav')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
<div class="container">
<h1>iPasteBin</h1>
<p>iPasteBin is yet another simple tool that enables you to save your text snippets and share them.</p>
</div>
</div>

<div class="container">
<!-- Example row of columns -->
<div class="row">
  <form class="paste-form" action="#" method="post">
    <textarea id="input-ta" name="name" rows="8" cols="40"></textarea>
  </form>
</div>

</div> <!-- /container -->

@include('includes.footer')
@endsection
