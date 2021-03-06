<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenterProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('centerProducts', function($table){

			$table->create();
			$table->increments('id');
			$table->string('centerId');
			$table->string('productId');
			$table->bigInteger('items');
			$table->bigInteger('appart');
			$table->float('inPrice');
			$table->float('outPrice');
			$table->softDeletes();
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('centerProducts');
	}

}
