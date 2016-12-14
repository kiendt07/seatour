<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlaceImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('place_image', function(Blueprint $table)
		{
			$table->foreign('place_id', 'place_image_ibfk_1')->references('place_id')->on('place')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('place_image', function(Blueprint $table)
		{
			$table->dropForeign('place_image_ibfk_1');
		});
	}

}
