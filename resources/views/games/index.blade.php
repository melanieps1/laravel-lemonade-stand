@extends('layouts.app-panel')

@section('content')

	<h1>Games Index</h1>

		<p>This is game <strong>{{ $game->id }}</strong></p>
		<p>You are on day <strong>{{ $day->day }}</strong></p>

		<button>Next Day</button>

@endsection