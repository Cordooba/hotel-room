<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use App\Hotel;

class Room extends Model
{
  protected $fillable = ['name', 'state','beds'];
  //
  //Establecemos la relación a uno o 1, respecto a Hotel
  //
  public function hotel ()
  {
    return $this->belongsTo(Hotel::class);
  }

}
