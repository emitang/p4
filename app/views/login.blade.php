@extends('base')

@section('content')

<body id="profile">

<div class="body-wrapper">
	<h2 class="body-header">Login</h2>

	<h3 class="fontother">Don't have an account yet? Click <a href="/register">here</a>.</h3>
	<p class="fontother">
		{{ Form::open(array('url' => '/login')) }}
			{{ Form::label('username', 'Username: ') }}
			{{ Form::text('username') }}<br><br>
			
			{{ Form::label('password', 'Password: ') }}
			{{ Form::password('password') }}<br><br>

			{{ Form::submit('Login') }}
		{{ Form::close() }}
	</p>
	
	<br><br><br><br><br><br>
</div>

@stop