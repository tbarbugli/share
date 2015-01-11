<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('price');
			$table->string('share_basis');
			$table->date('available');
			$table->string('bedroom');
			$table->string('bathrooms');
			$table->string('smoking');
			$table->string('furnished');
			$table->string('parking');
			$table->string('pet_friendly');
			$table->string('gender_friendly');
			$table->string('title');
			$table->text('description');
			$table->string('name');
			$table->string('email');
			$table->integer('phone');
			$table->string('address');
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
		Schema::drop('rooms');
	}

}
