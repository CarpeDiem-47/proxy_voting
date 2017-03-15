<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVotesTable extends Migration {

	public function up()
	{
		Schema::create('Votes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('t_id')->unsigned();
			$table->integer('studentNr');
			$table->string('studentEmail', 126);
		});
	}

	public function down()
	{
		Schema::drop('Votes');
	}
}