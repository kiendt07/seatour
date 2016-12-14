<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourDateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tour_date', function(Blueprint $table)
		{
			$table->integer('tour_date_id', true);
			$table->integer('tour_id')->index('tour_id');
			$table->date('date');
			$table->integer('slot_available');
			$table->primary(['tour_date_id','tour_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tour_date');
	}

}
