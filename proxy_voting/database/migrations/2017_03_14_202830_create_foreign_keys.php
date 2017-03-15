<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Votes', function(Blueprint $table) {
			$table->foreign('t_id')->references('id')->on('Teachers')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Votes', function(Blueprint $table) {
			$table->dropForeign('Votes_t_id_foreign');
		});
	}
}