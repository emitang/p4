@extends('base')

@section('content')

<body id="cocktails">

<div class="body-wrapper">
	<h2 class="body-header">Cocktail Directory</h2>

	<div class="list-wrapper">
		@foreach ($cocktails as $cocktail)
	    	<h3 class="fontother"><strong>{{ $cocktail->name }}</strong></h3>
	    	@if(isset($cocktail->author))
	    		<p class="fontother"><strong>Author: </strong>{{ $cocktail->author }}</p>
	    	@else
	       		<img src="{{ $cocktail->picture }}" alt ="{{ $cocktail->name }}" class='item-pic'>
	       		<p class="fontother"><strong>IBA Category: </strong>{{ $cocktail->IBAcat }}</p>
	       	@endif
	        <p class="fontother"><strong>Primary Alcohol: </strong>{{ $cocktail->primary }}</p>
	        <p class="fontother"><strong>Ingredients: </strong>{{ $cocktail->ingredients }}</p>
	        <p class="fontother"><strong>Glass: </strong>{{ $cocktail->glass }}</p>
	        <p class="fontother"><strong>How to Make: </strong>{{ $cocktail->info }}</p>
	        <br><br>
	    @endforeach
	</div>
	</div>

@stop