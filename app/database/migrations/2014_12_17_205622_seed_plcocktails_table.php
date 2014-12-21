<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedPlcocktailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('plcocktails')->insert(
			array(
				array(
					'name' => 'Alexander',
					'picture' => 'http://cdn2.foodviva.com/static-content/food-images/cocktail-recipes/alexander-cocktail/alexander-cocktail.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '3 cl Gin, 3 cl White Crème de Cacao (Chocolate Liqueur), 3 cl light cream',
					'glass' => 'Cocktail glass',
					'info' => 'Shake ingredients with ice, Strain into cocktail glass, Dust with nutmeg'
				),
				array(
					'name' => 'Americano',
					'picture' => 'http://www.ganzomag.com/wp-content/uploads/2012/05/americano-cocktail1.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Vermouth',
					'ingredients' => '3 cl Campari, 3 cl Red Vermouth, Splash of Soda Water',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Pour Campari and Vermouth into glass over ice, add Soda Water, Garnish with half an orange slice'
				),
				array(
					'name' => 'Angel Face',
					'picture' => 'http://www.spirits.com.tw/images/upload/cocktail/cocktail_000319.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '3 cl Gin, 3 cl Apricot Brandy, 3 cl Calvados (Apple Brandy)',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Aviation',
					'picture' => 'http://butcherette.com/wp-content/uploads/2010/07/Aviation-Cocktail.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '4.5 cl Gin, 1.5 cl Lemon Juice, 1.5 cl Maraschino Liqueur',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake ingredients with ice, Strain into cocktail glass, Garnish with a maraschino cherry'
				),
				array(
					'name' => 'Bacardi',
					'picture' => 'http://en.cocktail.fabbri1905.com/imgpub/129907/280/0/Ricetta_Bacardi_cocktails.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Rum',
					'ingredients' => '4.5 cl Bacardi White Rum, 2 cl Lemon or Lime Juice, 0.5 cl Grenadine Syrup',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Between the Sheets',
					'picture' => 'http://bartendingafterdark.files.wordpress.com/2013/02/between-sheets.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Rum',
					'ingredients' => '3 cl White Rum, 3 cl Cognac Brandy, 3 cl Triple Sec (Curaçao Liqueur), 2 cl Lemon Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Casino',
					'picture' => 'http://www.cocktailsspiritsliquors.com//uploads/casino_cocktail.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '4 cl Old Tom Gin, 1 cl Maraschino Liqueur, 1 cl Orange Bitters, 1 cl Lemon Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake ingredients with ice, Strain into cocktail glass, Garnish with a lemon twist and a maraschino cherry'
				),
				array(
					'name' => 'Clover Club',
					'picture' => 'https://farm3.staticflickr.com/2004/2285661404_961d7b8b78.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '4.5 cl Gin, 1.5 cl Lemon Juice, 1.5 cl Raspberry Syrup or Grenadine, 1 Egg White',
					'glass' => 'Cocktail Glass',
					'info' => 'Dry shake ingredients to emulsify, Shake again with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Daiquiri',
					'picture' => 'http://www.twoatthemost.com/wp-content/uploads/2009/03/daiquiri-300x300.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Rum',
					'ingredients' => '4.5 cl White Rum, 2.5 cl Lime Juice, 1.5 cl Simple Syrup',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake ingredients with ice, Strain into cocktail glass, Garnish with half a lime slice'
				),
				array(
					'name' => 'Derby',
					'picture' => 'http://www.highfoodality.com/wp-content/uploads/2011/05/Derby_002.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '6 cl Gin, 2 drops Peach Bitters',
					'glass' => 'Cocktail Glass',
					'info' => 'Stir ingredients with ice in a mixing glass, Strain into cocktail glass, Garnish with 2 mint leaves'
				),
				array(
					'name' => 'Dry Martini',
					'picture' => 'http://www.orgsat.com/wp-content/uploads/2014/10/dry-martini-espace-cocktail-46999329.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '6 cl Gin, 1 cl Dry Vermouth',
					'glass' => 'Martini Glass',
					'info' => 'Stir ingredients with ice in a mixing glass, Strain into martini glass, Squeeze oil from lemon peel into drink or garnish with olive'
				),
				array(
					'name' => 'Gin Fizz',
					'picture' => 'http://www.thenibble.com/reviews/main/cocktails/images/gin-fizz.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '4.5 cl Gin, 3 cl Lemon Juice, 1 cl Sugar Syrup, 8 cl Soda Water',
					'glass' => 'Highball Glass',
					'info' => 'Shake ingredients except soda water with ice, Pour into glass, Top with Soda Water, Garnish with lemon slice'
				),
				array(
					'name' => 'John Collins',
					'picture' => 'https://www.cocktailhunter.com/wp-content/uploads/2012/08/John-Collins-1.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '4.5 cl Gin, 3 cl Lemon Juice, 1.5 cl Sugar Syrup, 6 cl Soda Water',
					'glass' => 'Highball Glass',
					'info' => 'Pour into glass over ice and stir gently, Garnish with lemon slice and maraschino cherry'
				),
				array(
					'name' => 'Manhattan',
					'picture' => 'http://www.examiner.com/images/blog/wysiwyg/image/manhattan(2).jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Whiskey',
					'ingredients' => '5 cl Rye or Canadian Whisky, 2 cl Sweet Red Vermouth, Dash Angostura Bitters',
					'glass' => 'Cocktail Glass',
					'info' => 'Stir ingredients with ice in a mixing glass, Strain into cocktail glass, Garnish with maraschino cherry'
				),
				array(
					'name' => 'Mary Pickford',
					'picture' => 'http://www.how-to-drink.com/wp-content/uploads/2013/04/Mary-Pickford-Cocktail.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Rum',
					'ingredients' => '6 cl White Rum, 6 cl Pineapple Juice, 1 cl Grenadine, 1 cl Maraschino Liqueur',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Monkey Gland',
					'picture' => 'http://www.scienceofdrink.com/wp-content/uploads/2009/02/monkey-gland-x-2.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '5 cl Gin, 3 cl Orange Juice, 2 drops Absinthe, 2 drops Grenadine',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Negroni',
					'picture' => 'http://www.lyntongardiner.com/images/bev3.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '3 cl Gin, 3 cl Sweet Red Vermouth, 3 cl Campari',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Stir ingredients with ice in a mixing glass, Strain into cocktail glass, Garnish with orange twist'
				),
				array(
					'name' => 'Old Fashioned',
					'picture' => 'http://liquor.s3.amazonaws.com/wp-content/uploads/2012/09/bourbon-old-fashioned.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Whiskey',
					'ingredients' => '4.5 cl Bourbon or Rye Whiskey, 2 dashes Angostura Bitters, 1 Sugar Cube, Few dashes Water',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Mix sugar cube with bitters and water until dissolved, Fill glass with ice, add whiskey, Garnish with orange slice and a maraschino cherry'
				),
				array(
					'name' => 'Paradise',
					'picture' => 'http://www.mariebrizardcorporate.com/upload/Cocktail_Paradise.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '3.5 cl Gin, 2 cl Apricot Brandy, 1.5 cl Orange Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Stir ingredients with ice in a mixing glass, Strain into cocktail glass'
				),
				array(
					'name' => 'Planter’s Punch',
					'picture' => 'http://www.midnightmixologist.com/sites/all/themes/midnightmix/images/a_Passion_Fruit_Punch.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Rum',
					'ingredients' => '4.5 cl Dark Rum, 3.5 cl Orange Juice, 3.5 cl Pineapple Juice, 2 cl Lemon Juice,  1 cl Sugar Syrup, 3 dashes Angostura Bitters',
					'glass' => 'Highball Glass',
					'info' => 'Shake all ingredients (except for bitters) with ice, Pour into glass, Pour bitters on top, Garnish with cherry and pineapple'
				),
				array(
					'name' => 'Porto Flip',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/d/d2/Porto_Flip.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Brandy',
					'ingredients' => '1.5 cl Brandy, 4 cl Port, 1 cl Egg Yolk',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake with ice, Strain into glass, Garnish with nutmeg'
				),
				array(
					'name' => 'Ramos Fizz',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/8/80/RamosGinFizzRooseveltNOLAJuly2009.JPG',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '4.5 cl Gin, 1.5 cl Lime Juice, 1.5 cl Lemon Juice, 1.5 cl Simple Syrup, 6 cl Cream, 1 Egg White, 3 dashes Orange Flower Water, 2 drops Vanilla Extract, Soda Water',
					'glass' => 'Collins Glass',
					'info' => 'Dry shake ingredients (except soda water) to emulsify, Shake again with ice, Strain into glass, Top with Soda Water'
				),
				array(
					'name' => 'Rusty Nail',
					'picture' => 'http://www.culinarytrends.net/Rusty%20Nail%20lg.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Whiskey',
					'ingredients' => '4.5 cl Scotch Whisky, 2.5 cl Drambuie',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Fill glass with crushed ice, Pour in ingredients and stir gently, Garnish with lemon twist'
				),
				array(
					'name' => 'Sazerac',
					'picture' => 'http://cocktailtimes.com/whiskey/top_primehouse_sazerac.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Brandy',
					'ingredients' => '5 cl Cognac Brandy, 1 cl Absinthe, 1 Sugar Cube, 3 dashes Peychaud’s Bitters',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Rinse a glass with Absinthe, Add crushed ice, Stir remaining ingredients over ice, Discard excess Absinthe/ice from glass, Add remaining ingredients to glass, Garnish with lemon twist'
				),
				array(
					'name' => 'Screwdriver',
					'picture' => 'http://mybestdrinks.com/wp-content/uploads/2014/01/screwdriver.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Vodka',
					'ingredients' => '5 cl Vodka, 10 cl Orange Juice',
					'glass' => 'Highball Glass',
					'info' => 'Mix ingredients in glass with ice, Garnish with orange slice'
				),
				array(
					'name' => 'Sidecar',
					'picture' => 'http://chezbonnefemme.com/wp-content/uploads/2011/03/Sidecar.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Brandy',
					'ingredients' => '5 cl Cognac Brandy, 2 cl Triple Sec (Curaçao Liqueur), 2 cl Lemon Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Stinger',
					'picture' => 'http://media2.onsugar.com/files/2012/01/03/1/192/1922195/be3b6e73d2b839e4_DSC03109.preview.JPG',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Brandy',
					'ingredients' => '5 cl Cognac Brandy, 2 cl White Crème De Menthe',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Tuxedo',
					'picture' => 'http://0.tqn.com/y/cocktails/1/W/I/T/-/-/tuxedo-cocktail.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '3 cl Old Tom Gin, 3 cl Dry Vermouth, 0.5 bar spoon Maraschino Liqueur, 0.25 bar spoon Absinthe, 3 dashes Orange Bitters',
					'glass' => 'Cocktail Glass',
					'info' => 'Stir ingredients with ice in a mixing glass, Strain into cocktail glass, Garnish with a lemon twist and a maraschino cherry'
				),
				array(
					'name' => 'Whiskey Sour',
					'picture' => 'http://a.abcnews.com/images/Lifestyle/GTY_whiskey_sour_2_sr_140407_16x9_608.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Whiskey',
					'ingredients' => '4.5 cl Bourbon Whiskey, 3.0 cl Lemon Juice, 1.5 cl Sugar Syrup, Dash Egg White (Optional)',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Shake all ingredients with ice, Strain into ice-filled glass, Garnish with half orange slice and a maraschino cherry'
				),
				array(
					'name' => 'White Lady',
					'picture' => 'http://www.scienceofdrink.com/wp-content/uploads/2009/01/white-lady-3.jpg',
					'IBAcat' => 'The Unforgettables',
					'primary' => 'Gin',
					'ingredients' => '4 cl Gin, 3 cl Triple Sec (Curaçao Liqueur), 2 cl Lemon Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Bellini',
					'picture' => 'http://s3-eu-west-1.amazonaws.com/jamieoliverprod/_int/rdb2/upload/362_1_1350386018_lrg.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Sparkling Wine',
					'ingredients' => '10 cl Prosecco Sparkling Wine, 5 cl Peach Purée or Nectar',
					'glass' => 'Champagne Flute',
					'info' => 'Pour Peach Purée into flute, Add Sparkling Wine and stir gently'
				),
				array(
					'name' => 'Black Russian',
					'picture' => 'http://www.chowstatic.com/assets/recipe_photos/10032_black_russian.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Vodka',
					'ingredients' => '5 cl Vodka, 2 cl Coffee Liqueur',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Pour ingredients over ice, Stir gently'
				),
				array(
					'name' => 'Bloody Mary',
					'picture' => 'http://www.firehow.com/images/stories/users/79/bloody_mary_drink.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Vodka',
					'ingredients' => '4.5 cl Vodka, 9 cl Tomato Juice, 1.5 cl Lemon Juice',
					'glass' => 'Highball Glass',
					'info' => 'Add dashes of Worcestershire Sauce; Tabasco; salt; and pepper, Pour ingredients over ice and stir gently, Garnish with celery stalk'
				),
				array(
					'name' => 'Caipirinha',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/0/0c/Caipirinha2.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Cachaça',
					'ingredients' => '5 cl Cachaça, Half a Lime cut into four wedges, 2 tbsp Brown Sugar',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Place lime and sugar in glass and mix, Fill glass with crushed ice, Pour in Cachaça, Garnish with sugar cane'
				),
				array(
					'name' => 'Champagne Cocktail',
					'picture' => 'http://www.epicurious.com/images/recipesmenus/2010/2010_november/362449.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Champagne',
					'ingredients' => '9 cl Champagne, 1 cl Cognac Brandy, 2 dashes Angostura Bitters, 1 Sugar Cube',
					'glass' => 'Champagne Flute',
					'info' => 'Add Bitters onto Sugar Cube and put in flute, Pour in Cognac followed by champagne, Garnish with orange slice and a maraschino cherry'
				),
				array(
					'name' => 'Cosmopolitan',
					'picture' => 'link',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Vodka',
					'ingredients' => '4 cl Vodka Citron, 1.5 cl Cointreau (Curaçao Liqueur), 1.5 cl Lime Juice, 3 cl Cranberry Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Double strain into cocktail glass, Garnish with lime slice'
				),
				array(
					'name' => 'Cuba Libre',
					'picture' => 'http://img2.wikia.nocookie.net/__cb20130506185948/cocktails/images/7/70/Cuba-libre-cocktail.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Rum',
					'ingredients' => '12 cl Cola, 5 cl Dark or Light Rum, 1 cl Lime Juice',
					'glass' => 'Highball Glass',
					'info' => 'Build all ingredients in a highball glass filled with ice, Garnish with a lime wedge'
				),
				array(
					'name' => 'French Connection',
					'picture' => 'http://liquor.s3.amazonaws.com/wp-content/uploads/2013/01/fa-french_connection.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Brandy',
					'ingredients' => '3.5 cl Cognac Brandy, 3.5 cl Disaronno Liqueur',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Pour all ingredients directly into old fashioned glass filled with ice cubes, Stir Gently'
				), 
				array(
					'name' => 'Godfather',
					'picture' => 'http://www.liveinstyle.com/ee/images/uploads/Godfather.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Whiskey',
					'ingredients' => '3.5 cl Scotch Whisky, 3.5 cl Disaronno Liqueur',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Pour all ingredients directly into old fashioned glass filled with ice cubes, Stir Gently'
				),
				array(
					'name' => 'Godmother',
					'picture' => 'http://www.recipesart.co.uk/xml_gal/191/big/god_mother%20image.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Vodka',
					'ingredients' => '3.5 cl Vodka, 3.5 cl Disaronno Liqueur',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Pour all ingredients directly into old fashioned glass filled with ice cubes, Stir gently'
				),
				array(
					'name' => 'Golden Dream',
					'picture' => 'http://www.cocktails.eu/data/photos/golden+dream.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Liqueur',
					'ingredients' => '2 cl Galliano (Anise-Flavored Liqueur), 2 cl Triple Sec (Curaçao Liqueur), 2 cl Orange Juice, 1 cl Fresh Cream',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Grasshopper',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Grasshopper_cocktail.jpg/220px-Grasshopper_cocktail.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Crème de Cacao',
					'ingredients' => '3 cl White Crème de Cacao, 3 cl Green Crème de Menthe, 3 cl Fresh Cream',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'French 75',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/0/0b/French_75.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Champagne',
					'ingredients' => '3 cl Gin, 2 dashes Simple Syrup, 1.5 cl Lemon Juice, 6 cl Champagne',
					'glass' => 'Champagne Flute',
					'info' => 'Shake Gin; Syrup; and Lemon Juice with ice, Strain into champagne glass, Top with Champagne and stir gently'
				),
				array(
					'name' => 'Harvey Wallbanger',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/4/44/Harvey_Wallbanger.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Vodka',
					'ingredients' => '4.5 cl Vodka, 1.5 cl Galliano, 9 cl Orange Juice',
					'glass' => 'Highball Glass',
					'info' => 'Stir Vodka and Orange Juice with ice in highball glass, Float Galliano on top, Garnish with orange slice'
				),
				array(
					'name' => 'Hemingway Special',
					'picture' => 'http://images.makemeacocktail.com/cocktails/7368/hemingway_special.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Rum',
					'ingredients' => '6 cl White Rum, 4 cl Grapefruit Juice, 1.5 cl Maraschino Liqueur, 1.5 cl Lime Juice',
					'glass' => 'Double Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into double cocktail glass'
				),
				array(
					'name' => 'Horse’s Neck',
					'picture' => 'http://www.sisboomblog.com/wp-content/uploads/2012/01/Horses-Nail-Bourbon-2.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Brandy',
					'ingredients' => '4 cl Brandy, 12 cl Ginger Ale, Dash of Angostura Bitters (optional)',
					'glass' => 'Highball Glass',
					'info' => 'Pour Brandy and Ginger Ale directly into highball glass with ice cubes and stir gently, Garnish with lemon zest, Add dashes of Angostura Bitters if desired'
				),
				array(
					'name' => 'Irish Coffee',
					'picture' => 'http://media.irishcentral.com/images/MI-Irish-Coffee-glass.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Whiskey',
					'ingredients' => '4 cl Irish Whiskey, 8 cl Hot Coffee, 3 cl Fresh Cream, 1 tsp Brown Sugar',
					'glass' => 'Coffee Glass',
					'info' => 'Heat Coffee; Whiskey; and Sugar but do not boil, Pour into coffee glass, Top with cream by pouring over the back of a spoon, Serve hot'
				),
				array(
					'name' => 'Kir',
					'picture' => 'http://en.wikipedia.org/wiki/Kir_(cocktail)#mediaviewer/File:Kir_cocktail.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Wine',
					'ingredients' => '9 cl White Wine, 1 cl Crème de Cassis',
					'glass' => 'Wine Glass',
					'info' => 'Pour Crème de Cassis into wine glass, Top up with Wine'
				),
				array(
					'name' => 'Long Island Iced Tea',
					'picture' => 'http://restaurant.levleymarketing.com/wp-content/uploads/2013/09/NCI_iced_tea.png',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Gin',
					'ingredients' => '1.5 cl Tequila, 1.5 cl Vodka, 1.5 cl White Rum, 1.5 cl Triple Sec (Curaçao Liqueur), 1.5 cl Gin, 2.5 cl Lemon Juice, 3 cl Gomme Syrup, 1 dash Cola',
					'glass' => 'Highball Glass',
					'info' => 'Pour all ingredients into highball glass and stir gently, Garnish with a lemon twist'
				),
				array(
					'name' => 'Mai-Tai',
					'picture' => 'http://outdoorbar.net/wp-content/uploads/2014/06/mango-mai-tai-cocktail.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Rum',
					'ingredients' => '4 cl White Rum, 2 cl Dark Rum, 1.5 cl Orange Curaçao, 1.5 cl Orgeat Syrup, 1 cl Lime Juice',
					'glass' => 'Highball Glass',
					'info' => 'Shake all ingredients except Dark Rum with ice, Strain into highball glass, Float Dark Rum to top, Garnish with pineapple spear and lime twist, Serve with straw'
				),
				array(
					'name' => 'Margarita',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/3/37/MargaritaReal.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Tequila',
					'ingredients' => '3.5 cl Tequila, 2 cl Cointreau (Curaçao Liqueur), 1.5 cl Lime Juice',
					'glass' => 'Margarita Glass',
					'info' => 'Rub the rim of glass with Lime Slice to make salt stick to it, Shake other ingredients with ice, Carefully pour into glass taking care to not dislodge salt, Garnish with lime slice'
				),
				array(
					'name' => 'Mimosa',
					'picture' => 'http://www.31dover.com/media/catalog/product/cache/1/image/220x220/9df78eab33525d08d6e5fb8d27136e95/3/1/31dover-mimosa-220x220.png',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Champagne',
					'ingredients' => '7.5 cl Champagne, 7.5 cl Orange Juice',
					'glass' => 'Champagne Flute',
					'info' => 'Mix both ingredients in champagne flute, Serve cold'
				),
				array(
					'name' => 'Mint Julep',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/5/55/Mint_Julep_im_Silberbecher.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Whiskey',
					'ingredients' => '6 cl Bourbon Whiskey, 4 leaves of Mint, 1 tsp Powdered sugar, 2 tsp Water',
					'glass' => 'Highball Glass',
					'info' => 'Gently muddle Mint, Sugar and Water in highball glass, Fill glass with cracked ice, Add Bourbon and stir well, Garnish with sprig of mint leaves'
				),
				array(
					'name' => 'Mojito',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/f/f2/Mojito.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Rum',
					'ingredients' => '4 cl White Rum, 3 cl Lime Juice, 6 leaves of Mint, 2 tsp Sugar, Soda Water',
					'glass' => 'Collins Glass',
					'info' => 'Muddle Mint and Sugar with Lime Juice in glass, Add Rum and top with Soda Water, Garnish with sprig of mint leaves, Serve with a straw'
				),
				array(
					'name' => 'Moscow Mule',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/a/a7/Moscow_Mule.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Vodka',
					'ingredients' => '4.5 cl Vodka, 0.5 cl Lime Juice, 8 Leaves of Mint, 12 cl Ginger Beer',
					'glass' => 'Copper Mug',
					'info' => 'Combine Vodka, Ginger Beer and Mint in copper mug, Add Lime Juice and stir gently, Garnish with lime slice'
				),
				array(
					'name' => 'Piña Colada',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/b/b2/Piña_Colada.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Rum',
					'ingredients' => '3 cl White Rum, 3 cl Coconut Cream, 9 cl Pineapple Juice',
					'glass' => 'Hurricane Glass',
					'info' => 'Mix ingredients with crushed ice until smooth, Pour into poco grande glass, Garnish with pineapple and a maraschino cherry'
				),
				array(
					'name' => 'Rose',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/b/b8/Rose_%28cocktail%29.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Vermouth',
					'ingredients' => '4 cl Dry Vermouth, 2 cl Kirsch, 3 dashes Strawberry Syrup',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Sea Breeze',
					'picture' => 'http://italian-grill.co.uk/wp-content/uploads/2013/11/sea_breeze.png',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Vodka',
					'ingredients' => '4 cl Vodka, 12 cl Cranberry Juice, 3 cl Grapefruit Juice',
					'glass' => 'Highball Glass',
					'info' => 'Pour all ingredients into highball glass filled with ice, Garnish with lime wedge'
				),
				array(
					'name' => 'Sex on the Beach',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/a/a2/Sex_On_The_Beach.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Vodka',
					'ingredients' => '4 cl Vodka, 2 cl Peach Schnapps, 4 cl Orange Juice, 4 cl Cranberry Juice',
					'glass' => 'Highball Glass',
					'info' => 'Pour all ingredients into highball Glass filled with ice, Garnish with orange slice'
				),
				array(
					'name' => 'Singapore Sling',
					'picture' => 'http://www.shintoribangkok.com/wp-content/uploads/2013/08/Singapore-Sling.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Gin',
					'ingredients' => '3 cl Gin, 1.5 cl Heering Cherry Liqueur (Cherry Brandy), 0.75 cl Cointreau, 0.75 cl DOM Bénédictine, 1 cl Grenadine, 12 cl Pineapple Juice, 1.5 cl Lime Juice, 1 dash Angostura Bitters',
					'glass' => 'Highball Glass',
					'info' => 'Shake all ingredients with ice, Strain into highball glass, Garnish with pineapple and a maraschino cherry'
				),
				array(
					'name' => 'Tequila Sunrise',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/7/79/Tequila_Sunrise_garnished_with_orange_and_cherry_-_Evan_Swigart.jpg',
					'IBAcat' => 'Contemporary Classics',
					'primary' => 'Tequila',
					'ingredients' => '4.5 cl Tequila, 9 cl Orange Juice, 1.5 cl Grenadine Syrup',
					'glass' => 'Collins Glass',
					'info' => 'Pour Tequila and Orange Juice into highball glass over ice, Add Grenadine which will sink to bottom, Do not stir'
				),
				array(
					'name' => 'Barracuda',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/baracuda.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Rum',
					'ingredients' => '4.5 cl Gold Rum, 1.5 cl Galliano, 6 cl Pineapple Juice, 1 dash Lime Juice',
					'glass' => 'Martini Glass',
					'info' => 'Shake all ingredients with ice, Strain into martini glass, Top with Prosecco'
				),
				array(
					'name' => 'Bramble',
					'picture' => 'http://images.makemeacocktail.com/cocktails/7370/bramble.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Gin',
					'ingredients' => '4 cl Gin, 1.5 cl Lemon Juice, 1 cl Sugar Syrup, 1.5 cl Blackberry Liqueur',
					'glass' => 'Rocks Glass',
					'info' => 'Pour Gin and Lemon Juice over crushed ice in glass, Stir then pour Blackberry Liqueur over top of drink in circular fashion, Garnish with lemon slice and two blackberries'
				),
				array(
					'name' => 'B-52',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/3/3a/Cocktail_B52.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Coffee Liqueur',
					'ingredients' => '2 cl Coffee Liqueur, 2 cl Irish Cream , 2 cl Orange Cognac',
					'glass' => 'Shot Glass',
					'info' => 'Layer ingredients into a shot glass, Serve with stirrer'
				),
				array(
					'name' => 'Dark n Stormy',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/0/00/Dark_n_Stormy.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Rum',
					'ingredients' => '6 cl Gosling\'s Black Rum, 10 cl Ginger Beer',
					'glass' => 'Highball Glass',
					'info' => 'Pour Rum over ice in highball glass, Top with Ginger Beer, Garnish with lime wedge'
				),
				array(
					'name' => 'Dirty Martini',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/dirty_martini.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Vodka',
					'ingredients' => '6 cl Vodka, 1 cl Dry Vermouth, 1 cl Olive Juice',
					'glass' => 'Martini Glass',
					'info' => 'Pour all ingredients into mixing glass with ice, Stir well, Strain in martini glass, Garnish with green olive'
				),
				array(
					'name' => 'Espresso Martini',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/espresso_martini.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Vodka',
					'ingredients' => 'i5 cl Vodka, 1 cl Kahlúa, Sugar Syrup (according to individual preference of sweetness), 1 short strong Espresso',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'French Martini',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/french_martini.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Vodka',
					'ingredients' => '4.5 cl Vodka, 1.5 cl Raspberry Liqueur, 1.5 cl Pineapple Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Pour all ingredients into mixing glass with ice cubes and stir well, Strain into cocktail glass, Squeeze oil from lemon peel onto drink'
				),
				array(
					'name' => 'Kamikaze',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/6/61/Kamikaze.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Vodka',
					'ingredients' => '3 cl Vodka, 3 cl Triple Sec (Curaçao Liqueur), 3 cl Lime Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Lemon Drop Martini',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/lemon_drop.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Vodka',
					'ingredients' => '2.5 cl  Vodka Citron, 2 cl Triple Sec (Curaçao Liqueur), 1.5 cl Lemon Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass rimmed with sugar, Garnish with slice of lemon'
				),
				array(
					'name' => 'Pisco Sour',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/2/27/Pisco_sour_20100613b.JPG',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Brandy',
					'ingredients' => '4.5 cl Pisco Brandy, 3 cl Lemon Juice, 2 cl Simple Syrup, 1 Egg White',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Vigorously shake all ingredients with ice, Strain contents into old fashioned glass, Garnish with dash Angostura Bitters'
				),
				array(
					'name' => 'Russian Spring Punch',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/russian_spring.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Vodka',
					'ingredients' => '2.5 cl Vodka, 2.5 cl Lemon Juice, 1.5 cl Créme de Cassis, 1 cl Sugar Syrup',
					'glass' => 'Highball Glass',
					'info' => 'Shake ingredients with ice, Strain into highball glass, Top with sparkling wine, Garnish with lemon slice and blackberry'
				),
				array(
					'name' => 'Spritz Veneziano',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/spritz_veneziano.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Prosecco',
					'ingredients' => '6 cl Prosecco, 4 cl Aperol, Splash of Soda Water',
					'glass' => 'Old Fashioned Glass',
					'info' => 'Pour into old fashioned glass filled with ice, Top with a splash of soda water, Garnish with half orange slice'
				),
				array(
					'name' => 'Tommy’s Margarita',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/tommy_margarita.jpg',
					'IBAcat' => 'New Era Drink',
					'primary' => 'Tequila',
					'ingredients' => '4.5 cl Tequila, 1.5 cl Lime Juice, 2 bar spoons of Agave Nectar',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),
				array(
					'name' => 'Vampiro',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/vampiro.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Tequila',
					'ingredients' => '5 cl Tequila (silver), 7 cl Tomato Juice, 3 cl Orange Juice, 1 cl Lime Juice, 1 tsp Clear Honey, Half slice Onion finely chopped, Few slices fresh Red Hot Chili Peppers, Few drops Worchestershire Sauce, Salt',
					'glass' => 'Highball Glass',
					'info' => 'Shake all ingredients with ice, Strain into highball glass filled with ice, Garnish with a wedge of lime and a chili'
				),
				array(
					'name' => 'Vesper',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/2/23/Vesper_Cocktail.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Gin',
					'ingredients' => '6 cl Gin, 1.5 cl Vodka, 0.75 cl Lillet Blonde',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into glass, Garnish with a lemon twist'
				),
				array(
					'name' => 'Yellow Bird',
					'picture' => 'http://www.iba-world.com/images/cocktail_drinks/yellow_bird.jpg',
					'IBAcat' => 'New Era Drinks',
					'primary' => 'Rum',
					'ingredients' => '3 cl White Rum, 1.5 cl Galliano, 1.5 cl Triple Sec (Curaçao Liqueur), 1.5 cl Lime Juice',
					'glass' => 'Cocktail Glass',
					'info' => 'Shake all ingredients with ice, Strain into cocktail glass'
				),

		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('plcocktails')->delete();
	}

}
