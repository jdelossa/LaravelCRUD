<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalpracticesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicalpractices', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->string('specialty');
            $table->string('location');
            $table->string('website');
            $table->string('phone');
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
		Schema::drop('medicalpractices');
	}

}
