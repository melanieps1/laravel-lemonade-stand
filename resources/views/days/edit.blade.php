@extends('layouts.app-panel')

@section('title')
  Game {{ $day->game_id }}, Day {{ $day->day }}
@endsection


@section('content')

<h3>Current Conditions</h3>
  
	<form class="form-horizontal">  

@component('components.static', [
  'name' => 'Condition',
  'description' => $day->condition->name
  ])
@endcomponent

@component('components.static', [
  'name' => 'Temperature',
  'description' => $day->temperature
  ])
@endcomponent

	</form>

<h3>Resources</h3>

<form method="get" action="/days/create" class="form-horizontal">

  <input type="hidden" name="yesterday" value="{{ $day->day }}">

@component('components.static', [
  'name' => 'Balance',
  'description' => 'TODO'
  ])
@endcomponent

@foreach ($resources as $resource)
  @component('components.resource', [
    'name' => $resource->name, 
    'description' => $resource->description, 
    'placeholder' => $resource->servings
    ])
  @endcomponent
@endforeach

  <div class="form-group">
    <div class="col-sm-12 text-center">
      <button class="btn btn-sm btn-default" type="submit">Let's sell some lemonade!</button>    
    </div>
  </div>

</form>

@endsection 