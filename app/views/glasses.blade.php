@extends('base')

@section('content')

<body id="glasses">

<div class="body-wrapper">
	<h2 class="body-header">Glasses</h2>

	<div class="list-wrapper">
		@foreach ($glasses as $glass)
	        <h3 class="fontother"><strong>{{ $glass->name; }}</strong></h3>
	        <img src="{{ $glass->picture }}" alt ="{{ $glass->name }}" class='item-pic'>
	        <p class="fontother">{{ $glass->description }}</p>
	        <br><br>
	    @endforeach
	</div>
</div>

@stop