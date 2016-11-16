@extends('app')

@section('content')

@if ($first == 'Fox1')
	<h1>Hi Fox</h1>
@else
	<h1>Else</h1>
@endif

<h1>About Me: {{ $first }} {{ $last }}</h1>

@if (count($people))
	<h3>People I like: </h3>
	<ul>
		@foreach ($people as $person)
			<li>{{ $person }}</li>
		@endforeach
	</ul>
@endif

<p>Lorem ipsum dolor sit amet, semper instructior usu et, mei ad noster repudiandae. Soluta recusabo argumentum id qui, zril epicurei per eu. Ne per unum illum. In expetendis dissentiet per, aeque ubique pericula per ne. Vix ad etiam maluisset, modus laudem putent eam ex.</p>

@stop