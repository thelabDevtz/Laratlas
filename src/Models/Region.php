<?php

namespace Thelabdev\Laratlas\Models;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  protected $guarded = [];
  public $timestamps = false;

  /*
  |--------------------------------------------------------------------------
  | RELATIONSHIP
  |--------------------------------------------------------------------------
  */


  /**
   * get all districts of the regions
   */
  public function districts(){
      return $this->hasMany(District::class);
  }
}
