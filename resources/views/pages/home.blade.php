@extends('app')
@section('content')
@include('includes.nav')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
<div class="container">
<h1>iPasteBin</h1>
<p>iPasteBin is a simple tool for saving and sharing your text snippets.</p>
</div>
</div>

<div class="container">
<!-- Example row of columns -->
<div class="paper">
    <div class="paper-content">
        <textarea id="iText" autofocus>Start Typing . . .</textarea>
    </div>
</div>

</div> <!-- /container -->

@include('includes.footer')
@endsection
