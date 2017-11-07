@extends('layouts.app-panel')

@section('title')
  Game {{ $day->game_id }}, Day {{ $day->day }}
@endsection


@section('content')

<form method="get" action="/days/create">
  <p><strong>Condition:</strong> {{ $day->condition->name }}</p>
  <p><strong>Temperature:</strong> {{ $day->temperature }}</p>
  <input type="hidden" name="yesterday" value="{{ $day->id }}">
  <button class="btn btn-sm btn-default" type="submit">New Day</button>
</form>

@endsection 