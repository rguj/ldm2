<?php

namespace Rguj\LDM2\Facades;

use Rguj\LDM2\Manager as DatabaseManager;
use Illuminate\Support\Facades\Facade;

class Manager extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DatabaseManager::class;
    }
}
