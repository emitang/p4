<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/cocktails', function()
{
    return View::make('cocktails');
});

Route::get('/cocktailstu', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->IBAcat == "The Unforgettables")
            $cocktailstu[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailstu);

});

Route::get('/cocktailscc', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->IBAcat == "Contemporary Classics")
            $cocktailscc[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailscc);

});

Route::get('/cocktailsned', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->IBAcat == "New Era Drinks")
            $cocktailsned[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsned);

});

Route::get('/cocktailsa', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->primary == "Absinthe")
            $cocktailsa[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsa);

});

Route::get('/cocktailsb', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->primary == "Brandy")
            $cocktailsb[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsb);

});

Route::get('/cocktailsc', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->primary == "Cachaça")
            $cocktailsc[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsc);

});

Route::get('/cocktailsch', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->primary == "Champagne")
            $cocktailsch[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsch);

});

Route::get('/cocktailsg', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->primary == "Gin")
            $cocktailsg[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsg);

});

Route::get('/cocktailsr', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->primary == "Rum")
            $cocktailsr[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->primary == "Rum")
            $cocktailsr[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsr);

});

Route::get('/cocktailst', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->primary == "Tequila")
            $cocktailst[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailst);

});

Route::get('/cocktailsv', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->primary == "Vodka")
            $cocktailsv[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsv);

});

Route::get('/cocktailsw', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->primary == "Whiskey")
            $cocktailsw[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsw);

});

Route::get('/cocktailscg', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->glass == "Cocktail Glass")
            $cocktailscg[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailscg);

});

Route::get('/cocktailscolg', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->glass == "Collins Glass")
            $cocktailscolg[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailscolg);

});

Route::get('/cocktailscofg', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->glass == "Coffee Glass")
            $cocktailscofg[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailscofg);

});

Route::get('/cocktailshg', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->glass == "Highball Glass")
            $cocktailshg[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailshg);

});

Route::get('/cocktailshurg', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->glass == "Hurricane Glass")
            $cocktailshurg[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailshurg);

});

Route::get('/cocktailsmargg', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->glass == "Margarita Glass")
            $cocktailsmargg[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsmargg);

});

Route::get('/cocktailsmartg', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->glass == "Martini Glass")
            $cocktailsmartg[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsmartg);

});

Route::get('/cocktailsofg', function()
{
    $cocktailsdb = DB::table('plcocktails')->get();
    foreach ($cocktailsdb as $cocktail)
    {
        if ($cocktail->glass == "Old Fashioned Glass")
            $cocktailsofg[] = $cocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsofg);

});

Route::get('/cocktailsnew', function()
{
    if (Auth::guest())
        return Redirect::to('/register')->with('flash_message', 'You must have an account to view this page!');
    else
        return View::make('/cocktailsnew');
});

Route::post('/cocktailsnew',
    array(
        'before' => 'csrf', 
        function() {

            $ucocktail = new Ucocktail;
            $ucocktail->name = Input::get('drink');
            $ucocktail->author = Auth::user()->username;
            $ucocktail->primary = Input::get('alcohol');
            $ucocktail->ingredients = Input::get('stuff');
            $ucocktail->glass = Input::get('glass');
            $ucocktail->info = Input::get('howto');
            $ucocktail->save();

            # Try to add the cocktail 
            try {
                $ucocktail->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/cocktailsnew')->with('flash_message', 'Adding failed; please try again.')->withInput();
            }

            return Redirect::to('/cocktails')->with('flash_message', 'Cocktail added successfully!');

        }
    )
);

Route::get('/alcohols', function()
{
	$alcoholsdb = DB::table('alcohols')->get();
    return View::make('alcohols')->with('alcohols', $alcoholsdb);
});

Route::get('/glasses', function()
{
	$glassesdb = DB::table('glasses')->get();
    return View::make('glasses')->with('glasses', $glassesdb);
});

Route::get('/profile', function()
{
	if (Auth::guest())
        return Redirect::to('/register')->with('flash_message', 'You must have an account to view this page!');
    else {
        $writer = Auth::user()->username;
        $cocktails = Ucocktail::where('author', '=', $writer)->get();
        return View::make('profile')->with('cocktails', $cocktails);
    }
});
    
Route::get('/register', function()
{
    return View::make('register');
});

Route::post('/register', 
    array(
        'before' => 'csrf', 
        function() {

            $user = new User;
            $user->username = Input::get('username');
            $user->password = Hash::make(Input::get('password'));

            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/register')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }

            # Log the user in
            Auth::login($user, $remember = true);

            return Redirect::to('/profile')->with('flash_message', 'Welcome to Speakeasy!');

        }
    )
);

Route::get('/login',
    array(
        'before' => 'guest',
        function() {
            return View::make('login');
        }
    )
);

Route::post('/login', 
    array(
        'before' => 'csrf', 
        function() {

            $credentials = Input::only('username', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/profile')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('login');
        }
    )
);

Route::get('/logout', function() {

    # Log out
    Auth::logout();

    # Send them to the homepage
    return Redirect::to('/');

});