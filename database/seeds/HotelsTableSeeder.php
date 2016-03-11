<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    DB::table('hotel')->insert([
      'name' => 'Mickey´s Hotel',
      'starts' => '5'
    ]);

    DB::table('hotel')->insert([
      'name' => 'Donald´s Hotel',
      'starts' => '4'
    ]);

    }
}
