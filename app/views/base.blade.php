<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Speakeasy')</title>
	<link rel='stylesheet' href='css/p4.css' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

	@yield('head')

</head>
<body>
	<div class="top-wrapper">
		<h1 id="title">Speakeasy</h1>
	</div>

	<div class="nav-bar">
		<ul>
			<li class="nav-li"><a href="/" id="aboutnav">ABOUT</a></li>
			<li class="nav-li"><a href="/cocktails" id="cocktailsnav">COCKTAILS</a></li>
			<li class="nav-li"><a href="/alcohols" id="alcoholsnav">ALCOHOLS</a></li>
			<li class="nav-li"><a href="/glasses" id="glassesnav">GLASSES</a></li>
			<li class="nav-li"><a href="/profile" id="profilenav">PROFILE</a></li>
		</ul>
	</div>
	@yield('content')

	@yield('body')

	<div class="footer-wrapper">
		<h5>Contact Information</h5>
		<ul>
			<li><a href ='mailto:emitang@mit.edu'>email</li>
			<li><a href='github.com/emitang'>github</li>
		</ul>
	<div>
</body>
</html>