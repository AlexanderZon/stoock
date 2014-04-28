<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenterMetas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('centerMetas', function($table){

			$table->create();			
			$table->increments('id');
			$table->bigInteger('productId');
			$table->string('metaKey');
			$table->longText('metaValue');
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
		Schema::dropIfExists('centerMetas');
	}

}
