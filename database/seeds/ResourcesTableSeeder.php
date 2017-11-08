<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('resources')->insert([
        'name' => 'Lemons',
        'description' => 'When life gives you lemons...',
        'cost' => .10,
        'servings' => 1,
        'expires_in_days' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('resources')->insert([
        'name' => 'Sugar',
        'description' => 'Granulated, white',
        'cost' => 2.00,
        'servings' => 16,
        'expires_in_days' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('resources')->insert([
        'name' => 'Ice',
        'description' => 'Cubes',
        'cost' => .50,
        'servings' => 10,
        'expires_in_days' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('resources')->insert([
        'name' => 'Paper cups',
        'description' => 'Sturdy, waxed paper',
        'cost' => 1.00,
        'servings' => 20,
        'expires_in_days' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('resources')->insert([
        'name' => 'Signs',
        'description' => 'Printed with your location, the date, and your price',
        'cost' => .15,
        'servings' => 0,
        'expires_in_days' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

    }
}
