@extends('base')

@section('content')

<body id="profile">

<div class="body-wrapper">
	<h2 class="body-header">Register</h2>

	<h3 class="fontother">Already have an account? Click <a href="/login">here</a>.</h3>
	<p class="fontother">
		{{ Form::open(array('url' => '/register')) }}
			{{ Form::label('username', 'Username: ') }}
			{{ Form::text('username') }}<br><br>
			
			{{ Form::label('password', 'Password: ') }}
			{{ Form::password('password') }}<br><br>

			{{ Form::submit('Register') }}
		{{ Form::close() }}
	</p>

	<br><br><br><br><br><br>
</div>

@stop