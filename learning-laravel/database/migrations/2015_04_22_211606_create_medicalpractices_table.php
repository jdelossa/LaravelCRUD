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
		Schema::create('medicalpractices', function($table)
        {
            $table->increments(id);
            $table->string('title', 128);
            $table->string('specialty', 128);
            $table->string('url', 128);
            $table->string('phone', 128);
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
