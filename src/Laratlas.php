<?php
namespace Thelabdev\Laratlas;
use Thelabdev\Laratlas\Models\Region;
class Laratlas
{
  public static function getAllRegion()
  {
    return Region::all();
  }

  public static function findRegionById($id)
  {
    return Region::find($id);
  }

}



 ?>
