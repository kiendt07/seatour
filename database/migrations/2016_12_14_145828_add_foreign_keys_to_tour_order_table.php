<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTourOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tour_order', function(Blueprint $table)
		{
			$table->foreign('tour_date_id', 'tour_order_ibfk_1')->references('tour_date_id')->on('tour_date')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tour_order', function(Blueprint $table)
		{
			$table->dropForeign('tour_order_ibfk_1');
		});
	}

}
