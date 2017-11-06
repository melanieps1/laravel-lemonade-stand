@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<h2>My games</h2>
    <p><a href="/games/create">New Game!</a></p>
    <!-- <ul>
        <li>
            <button class="btn btn-sm btn-outline-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            <a href="#">Game 1</a> - Day 8, $24.87
        </li>
    </ul> -->

    @foreach ($games as $game)

        <li><a href="/games/{{ $game->id }}">Game {{ $game->id }}</a></li>

    @endforeach

<h2>Leader Board</h2>
    <ul>
        <li>Heath - $25,000</li>
        <li>Mario - $12,000</li>
        <li>Luigi - $8,000</li>
    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
