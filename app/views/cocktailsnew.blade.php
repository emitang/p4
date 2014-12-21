@extends('base')

@section('content')

<body id="cocktails">

<div class="body-wrapper">
	<h2 class="body-header">Add a Cocktail Recipe</h2>

	<p class="fontother">
		{{ Form::open(array('url' => '/cocktailsnew')) }}
			{{ Form::label('drink', 'Cocktail Name: ') }}<br>
			{{ Form::text('drink') }}<br><br>

			{{ Form::label('alcohol', 'Primary Alcohol: ') }}<br>
			{{ Form::select('alcohol', array(
    			'Absinthe' 	=> 'Absinthe',
        		'Brandy'	=> 'Brandy',
        		'Cahaça'    => 'Cahaça',
        		'Champagne'	=> 'Champagne',
        		'Gin'   	=> 'Gin',
        		'Rum'    	=> 'Rum',
        		'Tequila' 	=> 'Tequila',
        		'Vodka'   	=> 'Vodka',
        		'Whiskey' 	=> 'Whiskey')) }}<br><br>

			{{ Form::label('stuff', 'Ingredients (Separate by Commas [,]): ') }}<br>
			{{ Form::textarea('stuff') }}<br><br>

			{{ Form::label('glass', 'Glass: ') }}<br>
			{{ Form::select('glass', array(
    			'Cocktail Glass'   		=> 'Cocktail Glass',
        		'Collins Glass'     	=> 'Collins Glass',
        		'Coffee Glass'  	   	=> 'Coffee Glass',
        		'Highball Glass'  	   	=> 'Highball Glass',
        		'Hurricane Glass' 		=> 'Hurricane Glass',
        		'Margarita Glass'      	=> 'Margarita Glass',
        		'Martini Glass'  	   	=> 'Martini Glass',
        		'Old Fashioned Glass'  	=> 'Old Fashioned Glass')) }}<br><br>
			
			{{ Form::label('howto', 'Directions (Separate by Commas [,]): ') }}<br>
			{{ Form::textarea('howto') }}<br><br>

			{{ Form::submit('Add Cocktail') }}
		{{ Form::close() }}
	</p>

	<br><br>
</div>

@stop