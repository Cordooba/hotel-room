<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App;
use App\Room;
use App\Hotel;

class RoomsController extends Controller
{

  public function store(Request $request)
  {

    $this->validate($request, [
      'name' => 'required | between:10,50',
      'state' => 'required',
      'beds' => 'required | integer'
    ],[
      'required' => 'El campo :attribute no puede ser vacío.',
      'between' => 'El campo :attribute debe contener al menos 10 caracteres.',
      'integer' => 'El campo :attrivbute debe ser numérico.'
    ]);

    $room = new App\Room;

    $room->hotel_id = $request->hotel;
    $room->name = $request->name;
    $room->state = $request->state;
    $room->beds = $request->beds;

    $room->save();

    return back();
  }

  public function delete (Room $room)
  {
    $hotel = $room->hotel_id;

    $room->delete();

    return redirect('/'.$room->hotel_id);
  }

  public function edit (Room $room)
  {
    return view('rooms.edit', compact('room'));
  }

  public function update (Request $request, Room $room)
  {
      $room->update( $request->all() );

      return redirect('/'.$room->hotel_id);
  }

  public function showForm ()
  {
    $hotels = App\Hotel::all();

    return view('rooms.new', compact('hotels'));
  }

}
