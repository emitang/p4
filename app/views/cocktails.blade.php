@extends('base')

@section('content')

<body id="cocktails">

<div class="body-wrapper">
	<h2 class="body-header">Cocktail Directory</h2>

	<h3 class="fancy"><a href="/cocktailsnew">Add New</a></h3>

	<h4 class="fontother">Sort By: <br>
		<h5 class="fontother">IBA Category:</h5>
		<ul>
			<li class="fontother"><a href="/cocktailstu">The Unforgettables</a></li>
			<li class="fontother"><a href="/cocktailscc">Contemporary Classics</a></li>
			<li class="fontother"><a href="/cocktailsned">New Era Drinks</a></li>
		</ul>

		<h5 class="fontother">Primary Alcohol:</h5>
		<ul>
			<li class="fontother"><a href="/cocktailsa">Absinthe</a></li>
			<li class="fontother"><a href="/cocktailsb">Brandy</a></li>
			<li class="fontother"><a href="/cocktailsc">Cachaça</a></li>
			<li class="fontother"><a href="/cocktailsch">Champagne</a></li>
			<li class="fontother"><a href="/cocktailsg">Gin</a></li>
			<li class="fontother"><a href="/cocktailsr">Rum</a></li>
			<li class="fontother"><a href="/cocktailst">Tequila</a></li>
			<li class="fontother"><a href="/cocktailsv">Vodka</a></li>
			<li class="fontother"><a href="/cocktailsw">Whiskey</a></li>
		</ul>

		<h5 class="fontother">Glass:</h5>
		<ul>
			<li class="fontother"><a href="/cocktailscg">Cocktail Glass</a></li>
			<li class="fontother"><a href="/cocktailscolg">Collins Glass</a></li>
			<li class="fontother"><a href="/cocktailscofg">Coffee Glass</a></li>
			<li class="fontother"><a href="/cocktailshg">Highball Glass</a></li>
			<li class="fontother"><a href="/cocktailshurg">Hurricane Glass</a></li>
			<li class="fontother"><a href="/cocktailsmargg">Margarita Glass</a></li>
			<li class="fontother"><a href="/cocktailsmartg">Martini Glass</a></li>
			<li class="fontother"><a href="/cocktailsofg">Old Fashioned Glass</a></li>
		</ul>

		<br><br>

	</div>

@stop