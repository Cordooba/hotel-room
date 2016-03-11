<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use App\Room;

class Hotel extends Model
{
  protected $fillable = ['name', 'starts'];
  //
  //Establecemos la relación a varios o N, respecto a Room
  //
  public function rooms ()
  {
    return $this->hasMany(Room::class);
  }
}
