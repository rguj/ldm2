<?php

namespace Rguj\LDM2\Facades;

use Rguj\LDM2\Database\Drivers\Driver as DatabaseDriver;
use Illuminate\Support\Facades\Facade;

class Driver extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DatabaseDriver::class;
    }
}
