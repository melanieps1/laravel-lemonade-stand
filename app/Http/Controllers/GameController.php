<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = \App\Game::all();
        return view('games.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create a new game
        $game = new \App\Game;
        $game->user_id = \Auth::user()->id;
        $game->save();

        // create day 1 and conditions for new game
        $day = new \App\Day;
        // $conditions = new \App\Condition;
        $day->game_id = $game->id;
        $day->day = 1;
        $day->condition_id = 3; // TODO: Not hard code this
        $day->temperature = 90; // TODO: Not hard code this
        $day->save();

        // puts the user back on their home page (temporarily)
        // TODO: Redirect user to day 1 page
        return redirect()->route('home', compact('game', 'day'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = \App\Game::find($id);
        $day = new \App\Day;
        $day = \App\Day::where('game_id', $id)->orderBy('id')->first();
        // var_dump($day);
        return view('games.index', compact('game', 'day'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
