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
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->primary == "Absinthe")
            $cocktailsa[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->primary == "Absinthe")
            $cocktailsa[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsa);

});

Route::get('/cocktailsb', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->primary == "Brandy")
            $cocktailsb[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->primary == "Brandy")
            $cocktailsb[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsb);

});

Route::get('/cocktailsc', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->primary == "Cachaça")
            $cocktailsc[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->primary == "Cachaça")
            $cocktailsc[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsc);

});

Route::get('/cocktailsch', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->primary == "Champagne")
            $cocktailsch[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->primary == "Champagne")
            $cocktailsch[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsch);

});

Route::get('/cocktailsg', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->primary == "Gin")
            $cocktailsg[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->primary == "Gin")
            $cocktailsg[] = $ucocktail;
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
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->primary == "Tequila")
            $cocktailst[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->primary == "Tequila")
            $cocktailst[] = $ucocktail;
    }    return View::make('cocktailsdisplay')->with('cocktails', $cocktailst);

});

Route::get('/cocktailsv', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->primary == "Vodka")
            $cocktailsv[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->primary == "Vodka")
            $cocktailsv[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsv);

});

Route::get('/cocktailsw', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->primary == "Whiskey")
            $cocktailsw[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->primary == "Whiskey")
            $cocktailsw[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsw);

});

Route::get('/cocktailscg', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->glass == "Cocktail Glass")
            $cocktailscg[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->glass == "Cocktail Glass")
            $cocktailscg[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailscg);

});

Route::get('/cocktailscolg', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->glass == "Collins Glass")
            $cocktailscolg[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->glass == "Collins Glass")
            $cocktailscolg[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailscolg);

});

Route::get('/cocktailscofg', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->glass == "Coffee Glass")
            $cocktailscofg[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->glass == "Coffee Glass")
            $cocktailscofg[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailscofg);

});

Route::get('/cocktailshg', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->glass == "Highball Glass")
            $cocktailshg[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->glass == "Highball Glass")
            $cocktailshg[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailshg);

});

Route::get('/cocktailshurg', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->glass == "Hurricane Glass")
            $cocktailshurg[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->glass == "Hurricane Glass")
            $cocktailshurg[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailshurg);

});

Route::get('/cocktailsmargg', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->glass == "Margarita Glass")
            $cocktailsmargg[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->glass == "Margarita Glass")
            $cocktailsmargg[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsmargg);

});

Route::get('/cocktailsmartg', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->glass == "Martini Glass")
            $cocktailsmartg[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->glass == "Martini Glass")
            $cocktailsmartg[] = $ucocktail;
    }
    return View::make('cocktailsdisplay')->with('cocktails', $cocktailsmartg);

});

Route::get('/cocktailsofg', function()
{
    $plcocktailsdb = DB::table('plcocktails')->get();
    $ucocktailsdb = DB::table('ucocktails')->get();
    foreach ($plcocktailsdb as $plcocktail)
    {
        if ($plcocktail->glass == "Old Fashioned Glass")
            $cocktailsofg[] = $plcocktail;
    }
    foreach ($ucocktailsdb as $ucocktail)
    {
        if ($ucocktail->glass == "Old Fashioned Glass")
            $cocktailsofg[] = $ucocktail;
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