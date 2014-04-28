<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::table('users', function($table){

			$table->create();			
			$table->increments('id');
			$table->string('user')->unique();
			$table->string('email')->unique();
			$table->string('pass');
			$table->string('firstName');
			$table->string('lastName');
			$table->string('type');
			$table->string('status');
			$table->string('activationKey');
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
		
		Schema::dropIfExists('users');

	}

}
