<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    //
	public function condition() {
		return $this->belongsTo('App\Condition');
	}
}
