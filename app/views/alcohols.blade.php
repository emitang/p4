@extends('base')

@section('content')

<body id="alcohols">

<div class="body-wrapper">
	<h2 class="body-header">Alcohols</h2>

	<div class="list-wrapper">
		@foreach ($alcohols as $alcohol)
	        <h3 class="fontother"><strong>{{ $alcohol->name }}</strong></h3>
	        <img src="{{ $alcohol->picture }}" alt ="{{ $alcohol->name }}" class='item-pic'>
	        <p class="fontother"><strong>Appearance: </strong>{{ $alcohol->appearance }}</p>
	        <p class="fontother">{{ $alcohol->description }}</p>
	        <p class="fontother"><strong>Taste: </strong>{{ $alcohol->taste }}</p>
	        <br><br>
	    @endforeach
	</div>
</div>

@stop