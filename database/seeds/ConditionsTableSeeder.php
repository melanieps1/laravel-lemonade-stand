<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('conditions')->insert([
    		'name' => 'Hot and Dry',
    		'base_temperature' => '90',
    		'percent_chance' => .05,
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);

    	DB::table('conditions')->insert([
    		'name' => 'Hot',
    		'base_temperature' => '80',
    		'percent_chance' => .1,
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);

    	DB::table('conditions')->insert([
    		'name' => 'Sunny',
    		'base_temperature' => '75',
    		'percent_chance' => .5,
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);

    	DB::table('conditions')->insert([
    		'name' => 'Windy',
    		'base_temperature' => '70',
    		'percent_chance' => .1,
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);

    	DB::table('conditions')->insert([
    		'name' => 'Cloudy',
    		'base_temperature' => '70',
    		'percent_chance' => .1,
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);

    	DB::table('conditions')->insert([
    		'name' => 'Rainy',
    		'base_temperature' => '70',
    		'percent_chance' => .1,
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);

    	DB::table('conditions')->insert([
    		'name' => 'Thunderstorms',
    		'base_temperature' => '70',
    		'percent_chance' => .05,
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);
    }
}
