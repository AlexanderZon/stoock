<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenterProductMetas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('centerProductMetas', function($table){

			$table->create();			
			$table->increments('id');
			$table->bigInteger('centerProductId');
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
		Schema::dropIfExists('centerProductMetas');
	}

}
