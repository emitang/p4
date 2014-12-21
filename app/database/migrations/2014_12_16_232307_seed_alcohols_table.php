<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedAlcoholsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('alcohols')->insert(
			array(
				array(
					'name' => 'Absinthe',
					'appearance' => 'A brilliant green, sometimes colorless',
					'picture' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Privat-Livemont-Absinthe_Robette-1896.jpg/220px-Privat-Livemont-Absinthe_Robette-1896.jpg',
					'description' => 'Absinthe is a spirit derived from herbs such as wormwood, anise, fennel, and others. Sometimes referred to as "la fée verte" or "the green fairy". There are many special methods of serving it, often involving adding sugar and diluting it. The traditional French method of preparation involves placing a sugar cube on a special slotted spoon and pouring ice water until the sugar is dissolved. This then results in the drink becoming cloudy and milky due to components coming out of solution in a phenomena known as a "louche" that is said to highlight the flavors. The newer Bohemian method involves dousing a sugar cube in alcohol, lighting it on fire, dropping the lighted cube in the alcohol, and then dousing the whole thing with water.',
					'taste' => 'Anise-flavored'
				),
				array(
					'name' => 'Brandy',
					'appearance' => 'A rich burnt gold color',
					'picture' => 'http://pitt.abc.nc.gov/images/7/files/ddw-bourbon-brandy.jpg',
					'description' => 'Brandy is a spirit that comes from distilling wine. The name originates from a Dutch phrase meaning "burned wine". Brandy can also be applied to liquor that comes from distilling pomace or other fruit wines and mashes, though these forms of brandy tend to be lighter in color. There are several famous regional varieties of Brandy, such as Cognac and Pisco.',
					'taste' => 'Fruity and sweet'
				),
				array(
					'name' => 'Cahaça',
					'appearance' => 'A white or gold color, depending on age',
					'picture' => 'http://www.sebraemercados.com.br/wp-content/uploads/2014/09/Cachaca-Brasileira21.jpg',
					'description' => 'Cahaça is a spirit that comes from distilling sugarcane juice. It originates from Brazil, and outside of the country is usually used only in exotic cocktails. There are two varieties of Cahaça: unaged, which is white and often used in cocktails, and aged, which is gold and often drunk straight. Cahaça is sometimes considered a type of Rum.',
					'taste' => 'Sweet, rich, and smoky'
				),
				array(
					'name' => 'Champagne',
					'appearance' => 'Usually light in color, sometimes reddish, and filled with bubbles',
					'picture' => 'http://www.thorntonwine.com/wp-content/uploads/2012/06/champagne_glasses.jpg',
					'description' => 'Champagne is a sparkling wine whose name comes from the region of France that the grapes it is made with are supposed to originate from. A second fermentation of the wine, usually in the bottle the champagne is sold in, is what produces the carbonation that Champagne is known for. While the name "Champagne" is often used to refer to any sort of sparkling wine, many insist that the name only be applied to wines that come from Champagne. Pink or Rosé Champagne is often produced by adding a small amount of Pinot Noir red wine to the blend.',
					'taste' => 'Fizzy, and with varying levels of sweetness'
				),
				array(
					'name' => 'Gin',
					'appearance' => 'Colorless and clear to pale yellow',
					'picture' => 'http://i.telegraph.co.uk/multimedia/archive/02411/Gin_tonic_2411590b.jpg',
					'description' => 'In general, the name Gin refers to a spirit which has the taste of juniper berries as its predominant flavor. The EU legally differentiates between four different categories of Gin, produced in different ways, that are: Juniper-flavored spirit drinks, Gin, Distilled Gin, and London Gin. Overall, "Gin" covers a wide variety of different spirits, with the unifying factor being, again, the ingredient and taste of juniper.',
					'taste' => 'Juniper-flavored'
				),
				array(
					'name' => 'Rum',
					'appearance' => 'Colorless and clear to a more common darker amber',
					'picture' => 'http://www.1423.dk/wp-content/uploads/rum-photo-from-pussers-site1.jpg',
					'description' => 'Rum is a distilled alcoholic beverage, usually made from molasses through fermentation and then distillation. Rum is generally then aged, and either remains colorless or gains a darker color depending on the cask it is aged in. It is then blended to ensure consistency of flavors. Some countries consider Cahaça to be a type of Rum.',
					'taste' => 'Sweet and warm'
				),
				array(
					'name' => 'Tequila',
					'appearance' => 'White to pale gold, depending on age',
					'picture' => 'http://www.mycityway.com/blog/wp-content/uploads/2012/03/Flickrim.no_.hero_.jpg',
					'description' => 'Tequila is a distilled alcoholic beverage made from the blue agave plant. The name comes from the city of Tequila in the state of Jalisco in Mexico, from which the beverage also originates, as the soil in the area is particularly well-suited to growing the blue agave plant. The Mexican government has determined that Tequila can only be produced in the state of Jalisco and a few other limited regions.',
					'taste' => 'Harsh to mellow, depending on age, and vegetal'
				),
				array(
					'name' => 'Vodka',
					'appearance' => 'Colorless and clear',
					'picture' => 'http://www.freeimageslive.com/galleries/food/drinks/pics/neat_vodka.jpg',
					'description' => 'Vodka is a distilled alcoholic beverage, generally from fermented and distilled grains or potatoes. It is primarily composed of water and ethanol. Most Vodka is 40% alcohol by volume, and this is a standard that is observed in most countries. Vodka is often flavored or seasoned with herbs in areas that traditionally drink vodka, usually with home-made recipes, rather than being sold that way.',
					'taste' => 'Very neutral tasting'
				),
				array(
					'name' => 'Whiskey',
					'appearance' => 'A clear and rich amber gold color',
					'picture' => 'http://www.dirtcheapfunfun.com/wp-content/uploads/2014/08/whisky.jpg',
					'description' => 'Whiskey is a distilled alcoholic beverage made from fermented and sometimes malted grain mash, and then aged in wooden casks. The grains, material of the casks, and aging duration vary between different types of Whiskey. Some of the more common types include Bourbon, Scotch, and Irish Whiskey. The regulations regarding the Whiskey itself, and how the word is spelled (sometimes "Whisky"), are all influenced by the country of origin.',
					'taste' => 'Varies widely between different varieties'
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
		DB::table('alcohols')->delete();
	}

}
