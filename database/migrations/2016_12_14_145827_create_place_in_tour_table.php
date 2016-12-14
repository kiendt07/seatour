<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlaceInTourTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('place_in_tour', function(Blueprint $table)
		{
			$table->integer('place_id');
			$table->integer('tour_id')->index('tour_id');
			$table->integer('order_number');
			$table->integer('day_number');
			$table->time('start_time');
			$table->time('stop_time');
			$table->text('description', 65535);
			$table->primary(['place_id','tour_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('place_in_tour');
	}

}
