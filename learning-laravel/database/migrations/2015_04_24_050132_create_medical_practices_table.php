<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalPracticesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medical_practices', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('specialty');
            $table->string('website')->unique();
            $table->integer('phone');
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
		Schema::drop('medical_practices');
	}

}
