<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tour_order', function(Blueprint $table)
		{
			$table->integer('order_id');
			$table->integer('tour_date_id')->index('tour_date_id');
			$table->integer('user_id');
			$table->integer('no_tourists');
			$table->integer('price');
			$table->string('contact_name', 32);
			$table->string('contact_email', 128);
			$table->string('contact_phone', 16);
			$table->string('contact_address', 256);
			$table->text('description', 65535);
			$table->primary(['order_id','tour_date_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tour_order');
	}

}
