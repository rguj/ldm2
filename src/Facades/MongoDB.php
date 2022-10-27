<?php

namespace Rguj\LDM2\Facades;

use Rguj\LDM2\Database\Drivers\MongoDB as MongoCleint;
use Illuminate\Support\Facades\Facade;

class MongoDB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return MongoCleint::class;
    }
}
