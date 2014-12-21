<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedGlassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('glasses')->insert(
			array(
				array(
					'name' => 'Cocktail Glass',
					'picture' => 'https://foodservice.libbey.com/var/libbey/storage/images/libbey-foodservice-home/product-repository/cocktail-glass/91382-1-eng-US/Cocktail-Glass.jpg',
					'description'  => 'A Cocktail Glass is designed with the conditions of the cocktail in mind. Often the contents will be shaken or stirred with ice before being strained into the glass, so the stem helps it keep its cool temperature. The shape of the glass helps hold all the elements of the cocktail together.'
				),
				array(
					'name' => 'Collins Glass',
					'picture' => 'http://barsupplies.com/images/9-5-oz-monument-collins-glass.jpg',
					'description'  => 'Used for fizzy or Collins cocktails. The tall and thin shape of the glass helps preserve carbonation. Often used for sweet and/or icy drinks, where the aroma is not as important. Similar to Highball Glasses but taller and narrower.'
				),
				array(
					'name' => 'Coffee Glass',
					'picture' => 'http://totalbeverage.net/wp-content/uploads/Irish-Coffee-Glass.jpg',
					'description'  => 'These glasses are generally used for serving beverages involving coffee, often coffee mixers, or Irish coffee.'
				),
				array(
					'name' => 'Highball Glass',
					'picture' => 'http://barsupplies.com/images/8-oz-executive-highball-glass.jpg',
					'description'  => 'These are generally used for mixed drinks that have a high ratio of mixer to liquor. They are similar to a Collins glass, but generally more short and stout. In general, Highball Glasses are very versatile and can be used for many beverages.'
				),
				array(
					'name' => 'Hurricane Glass',
					'picture' => 'http://totalbeverage.net/wp-content/uploads/Hurricane-Glass.jpg',
					'description'  => 'Hurricane Glasses are very decorative, and as such are often used for tropical or exotic drinks. Their name comes from the shape, which is similar to a hurricane lamp.'
				),
				array(
					'name' => 'Margarita Glass',
					'picture' => 'http://images.teamsugar.com/files/upl1/1/15259/27_2008/super%20margarita%20glass.jpg',
					'description'  => 'There is debate over the origin of the interesting shape of the Margarita Glass. Some say that the idea behind it is to allow a wide area to pile up lots of the slush and a long rim to cover with salt.'
				),
				array(
					'name' => 'Martini Glass',
					'picture' => 'https://foodservice.libbey.com/var/libbey/storage/images/libbey-foodservice-home/product-repository/martini-glass3/92617-1-eng-US/Martini-Glass.jpg',
					'description'  => 'A Martini Glass is very similar to a cocktail glass, but they tend to have larger, wider bowls. Martini glasses also tend to be fully conical, and come to a point at the bottom instead of rounding off at the base.'
				),
				array(
					'name' => 'Old Fashioned Glass',
					'picture' => 'http://images.bloomingdales.com/is/image/BLM/products/4/optimized/1255934_fpx.tif?wid=1200&qlt=90,0&layer=comp&op_sharpen=0&resMode=sharp2&op_usm=0.7,1.0,0.5,0&fmt=jpeg',
					'description'  => 'An Old Fashioned Glass, is another very versatile glass, designed to allow lots of room for ice and stirring. The wide opening makes it easy to smell the aromatics of the cocktail.'
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
		DB::table('glasses')->delete();
	}

}
