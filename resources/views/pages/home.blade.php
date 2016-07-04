@extends('app')
@section('content')
@include('includes.nav')

<div class="jumbotron">
<div class="container">
<h1>iPasteBin</h1>
<p>iPasteBin is a simple tool for saving and sharing text snippets.</p>
</div>
</div>

<div class="container">

	<div class="paper">
	    <div class="paper-content">
	        <textarea id="iText" autofocus>Start Typing . . .</textarea>
	    </div>
	</div>

	<button class="save">Save</button>

</div>

@include('includes.footer')
@endsection
