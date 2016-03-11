<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Room', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('hotel_id')->unsigned()->index();
          $table->string('name');
          $table->enum('state', ['Libre', 'No disponible']);
          $table->integer('beds');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Room');
    }
}
