@extends('app')
@section('content')
@include('includes.nav')

<div class="jumbotron">
<div class="container">
<h2>Note{{ isset($data['token']) ? ': ' . $data['token'] : '' }} <a href="#">(copy url)</a></h2>

</div>
</div>

<div class="container">

	<form action="" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<div class="paper">
		    <div class="paper-content">
		        <textarea id="iText" name="iText" autofocus>{{ isset($data['iText']) ? $data['iText'] : 'Start Typing . . .' }}</textarea>
		    </div>
		</div>
		<button class="save {{ isset($data['iText']) ? 'saved' : '' }}">Save</button>
	</form>

</div>

@include('includes.footer')
@endsection
