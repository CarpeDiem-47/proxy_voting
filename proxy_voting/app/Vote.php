<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model {

	protected $table = 'Votes';
	public $timestamps = true;
	// Schema::create('Votes', function(Blueprint $table) {
		// 	$table->increments('id');
		// 	$table->timestamps();
		// 	$table->integer('t_id')->unsigned();
		// 	$table->integer('studentNr');
		// 	$table->string('studentEmail', 126);
		// });
	public $fillable = ['t_id','studentNr','studentEmail'];
	

	public function getTeacher()
	{
		return $this->hasOne('Teacher');
	}

}