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
		
		$roll = rand(1, 100);
    error_log($roll);
    $i = 0;
    $conditions = \DB::table('conditions')
              ->orderBy('id', 'asc')
              ->get();
    while ($roll > 0) {
      $nibble = $conditions[$i]->percent_chance * 100;
      error_log($conditions[$i]->name . " - " . $nibble);
      $roll -= $nibble;
      $i++;
    }
    $condition = \App\Condition::find($i);

		return $condition;
	}

	public function randomTemperature() {
		
		$random = 0;
      for ($i = 0; $i < 3; $i++) {
        $random += rand(-3, 3);
      }

		return $this->base_temperature + $random;
	}
}
