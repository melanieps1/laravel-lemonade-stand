<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $last_day = 7;

    public function days() {
      return $this->hasMany('App\Day')->orderBy('day', 'desc');
    }

    public function current_day() {
      return $this->days()->first();
    }
}
