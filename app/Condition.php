<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    //
	public function days() {
		return $this->hasMany('App\Day');
	}

	public static function randomCondition() {
		return 2;
	}
}
