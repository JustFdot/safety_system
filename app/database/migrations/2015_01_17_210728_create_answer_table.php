<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('group_id');
            $table->integer('question_id');
            $table->integer('item');
            $table->string('text');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('answers');
	}

}