<?php
namespace Thelabdev\Laratlas;
use Thelabdev\Laratlas\Models\Region;
class Laratlas
{
  public function regions()
  {
    return Region::all();
  }

}



 ?>
