<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('room')->insert([
      'hotel_id' => 1,
      'name' => 'Mickey´s Ear',
      'state' => 'No disponible',
      'beds' => 2
    ]);

    DB::table('room')->insert([
      'hotel_id' => 1,
      'name' => 'Minnie´s Heart',
      'state' => 'Libre',
      'beds' => 1
    ]);

    DB::table('room')->insert([
      'hotel_id' => 2,
      'name' => 'Donald´s Nephews',
      'state' => 'No disponible',
      'beds' => 3
    ]);

    DB::table('room')->insert([
      'hotel_id' => 2,
      'name' => 'Donald & Daisy',
      'state' => 'Libre',
      'beds' => 2
    ]);

    }
}
