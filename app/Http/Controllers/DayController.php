<?php
 
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	class DayController extends Controller
	{
	   /*
	    * Display a listing of the resource.
	    *
	    * @return \Illuminate\Http\Response
	    */
	   public function index()
	   {
	       //
	   }

	   /**
	    * Show the form for creating a new resource.
	    *
	    * @return \Illuminate\Http\Response
	    */
	   public function create(Request $request)
	   {

	   		$game = \App\Game::find($request->session()->get('game_id'));

	      // $yesterday = \App\Day::find($request->input('yesterday'));
	      // 'yesterday' was a hidden field created in the edit.blade.php view
	      // $game = $yesterday->game()->first();

	   		$yesterday = 0;
	      if ($request->input('yesterday')) {
	      	$yesterday = $request->input('yesterday');
	      }

	      // Is there time left in the game?
	      if ($yesterday < $game->last_day) {
	          // Make a new day
	          $day = new \App\Day;
	          $day->day = $yesterday + 1;
	          $day->game_id = $game->id;
	          $condition = \App\Condition::randomCondition();
	          $day->condition_id = $condition->id;
	          $day->temperature = $condition->randomTemperature();
	          $day->save();
	          return redirect('/days/' . $day->id);
	      } else {
	          // Mark game as finished
	          $game->is_done = true;
	          $game->save();
	      }

	       return redirect('/home');

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
	       $day = \App\Day::find($id);
	       $resources = \DB::table('resources')
                			->orderBy('name', 'asc')
                			->get();
        return view('days.edit', compact('day', 'resources'));
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