@extends('base')

@section('content')

<body id="profile">

<div class="body-wrapper">
	<h2 class="body-header">Profile</h2>

	<h3 class="fancy">My Cocktails</h3>
	<div class="list-wrapper">
		@if (empty($cocktails))
			<p class="fontother">You don't have any cocktails yet!</p>
		@else
			@foreach ($cocktails as $cocktail)
		    	<h3 class="fontother"><strong>{{ $cocktail->name }}</strong></h3>
		        <p class="fontother"><strong>Primary Alcohol: </strong>{{ $cocktail->primary }}</p>
		        <p class="fontother"><strong>Ingredients: </strong>{{ $cocktail->ingredients }}</p>
		        <p class="fontother"><strong>Glass: </strong>{{ $cocktail->glass }}</p>
		        <p class="fontother"><strong>How to Make: </strong>{{ $cocktail->info }}</p>
		        <br><br>
		    @endforeach
		@endif
		<br><br><br><br><br><br>
	</div>

	<h3 class="fontother"><a href="/logout">Logout</a></h3>
</div>

@stop