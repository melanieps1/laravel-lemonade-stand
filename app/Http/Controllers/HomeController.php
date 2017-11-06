<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_games = \App\Game::where([
            ['user_id', '=', \Auth::user()->id],
            ['is_done', '=', false],
            ])->get();

        $finished_games = \App\Game::where([
            ['user_id', '=', \Auth::user()->id],
            ['is_done', '=', true],
            ])->get();

        return view('home', compact('active_games', 'finished_games'));
    }
}
