<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model {

	protected $table = 'Votes';
	public $timestamps = true;

	public function getTeacher()
	{
		return $this->hasOne('Teacher');
	}

}