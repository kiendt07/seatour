<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlaceInTourTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('place_in_tour', function(Blueprint $table)
		{
			$table->foreign('place_id', 'place_in_tour_ibfk_1')->references('place_id')->on('place')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('tour_id', 'place_in_tour_ibfk_2')->references('tour_id')->on('tour')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('place_in_tour', function(Blueprint $table)
		{
			$table->dropForeign('place_in_tour_ibfk_1');
			$table->dropForeign('place_in_tour_ibfk_2');
		});
	}

}
