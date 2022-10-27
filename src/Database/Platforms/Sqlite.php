<?php

namespace Rguj\LDM2\Database\Platforms;

use Illuminate\Support\Collection;

abstract class Sqlite extends Platform
{
    /**
     * Get Types.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function getTypes(Collection $typeMapping)
    {
        $typeMapping->forget([
            'decimal',
            'double',
        ]);

        return $typeMapping->unique();
    }

    public static function registerCustomTypeOptions()
    {
    }
}
