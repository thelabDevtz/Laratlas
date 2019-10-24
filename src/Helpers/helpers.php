<?php

if (!function_exists('laratlas')) {
    /**
     * Access (lol) the Laratlas:: facade as a simple function.
     */
    function laratlas()
    {
      return app('laratlas');
    }
}

 ?>
