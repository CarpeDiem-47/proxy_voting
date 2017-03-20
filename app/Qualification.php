<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model {

	protected $table = 'Qualifications';
	public $timestamps = true;

	public function getVotes()
	{
		return $this->hasMany('Vote', 'q_id');
	}

}