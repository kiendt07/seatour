<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlaceImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('place_image', function(Blueprint $table)
		{
			$table->integer('image_id', true);
			$table->integer('place_id')->index('place_id');
			$table->text('image_link', 65535);
			$table->primary(['image_id','place_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('place_image');
	}

}
