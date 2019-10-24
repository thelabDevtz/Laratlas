<?php

namespace Thelabdev\Larastarter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thelabdev\Larastarter\Skeleton\SkeletonClass
 */
class LaratlasFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laratlas';
    }
}
