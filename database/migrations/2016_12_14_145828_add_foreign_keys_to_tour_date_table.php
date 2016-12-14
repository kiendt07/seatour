<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTourDateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tour_date', function(Blueprint $table)
		{
			$table->foreign('tour_id', 'tour_date_ibfk_1')->references('tour_id')->on('tour')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tour_date', function(Blueprint $table)
		{
			$table->dropForeign('tour_date_ibfk_1');
		});
	}

}
