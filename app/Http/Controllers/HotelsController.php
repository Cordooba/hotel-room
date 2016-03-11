<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App;
use App\Hotel;

class HotelsController extends Controller
{
    public function index () {

      $hotels = App\Hotel::all();
      return view('hotel.hotels', compact('hotels'));

    }

    public function showForm () {
      return view('hotel.new');
    }

    public function store (Request $request)
    {

      $this->validate($request, [
        'name' => 'required',
        'starts' => 'numeric | required | in:1,2,3,4,5'
      ],[
        'required' => 'El campo :attribute no puede ser vacío.',
        'numeric' => 'El campo :attribute debe ser numérico.',
        'in' => 'El campo :attribute debe ser un número entre 1 y 5.'

      ]);

      $hotel = new App\Hotel;

      $hotel->name = $request->name;
      $hotel->starts = $request->starts;

      $hotel->save();

      return back();

    }

    public function show (Hotel $hotel)
    {
      return view('hotel.showHotel', compact('hotel'));
    }

}
