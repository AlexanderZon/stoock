<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products', function($table){

			$table->create();			
			$table->increments('id');
			$table->bigInteger('parentId')->nullable();
			$table->bigInteger('centerId');
			$table->string('name');
			$table->longText('description');
			$table->string('type');
			$table->string('status');
			$table->bigInteger('ping')->default(0);
			$table->bigInteger('excerpt')->default(0);
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
		Schema::dropIfExists('products');
	}

}
