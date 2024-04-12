<?php

namespace Hyperspace\ElevenlabsApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hyperspace\ElevenlabsApi\Skeleton\SkeletonClass
 */
class ElevenlabsApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'elevenlabs-api';
    }
}
