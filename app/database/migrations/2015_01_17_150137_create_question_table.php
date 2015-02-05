<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('group_id');
            $table->integer('item');
            $table->string('text');
            $table->integer('correct');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('questions');
	}

}