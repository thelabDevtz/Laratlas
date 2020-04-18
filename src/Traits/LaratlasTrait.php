<?php

namespace thelabdev\Laratlas\Traits;

use Thelabdev\Laratlas\Services\Laratlas;

trait LaratlasTrait
{
    /**
     * @return Laratlas
     */
    public function laratlas()
    {
        return app('laratlas');
    }
}
