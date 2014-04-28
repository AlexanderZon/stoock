<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderProductMetas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('providerProductMetas', function($table){

			$table->create();			
			$table->increments('id');
			$table->bigInteger('providerProductId');
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
		Schema::dropIfExists('providerProductMetas');
	}

}
