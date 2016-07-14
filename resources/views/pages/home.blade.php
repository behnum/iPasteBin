@extends('app')
@section('content')
@include('includes.nav')

<div class="jumbotron">
<div class="container">
<h1 id="logo"><a href="/"><img src="./img/ipastebin-logo.png" alt="iPasteBin"></a></h1>
@include('includes.tagline')
</div>
</div>

<div class="container">

	<form action="{{ url('/') }}" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<div class="paper">
		    <div class="paper-content">
		        <textarea id="iText" name="iText" autofocus>{{ isset($data['iText']) ? $data['iText'] : 'Start Typing . . .' }}</textarea>
		    </div>
		</div>
		<button class="btn btn-default save {{ isset($data['iText']) ? 'saved' : '' }}">Save</button>
	</form>

</div>

@include('includes.footer')
@endsection
