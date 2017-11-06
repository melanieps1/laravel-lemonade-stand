@extends('layouts.app-panel')

@section('content')

	<h1>Games Index</h1>

		<p>This is game <strong>{{ $game->id }}</strong></p>
		<p>You are on day <strong>{{ $day->day }}</strong></p>

		<button><a onclick="incrementDay()">Next Day</a></button>

		<?php

			function incrementDay() {
				$this->db->query("UPDATE days SET day += 1 WHERE id = '$id'");
			}

		?>

@endsection