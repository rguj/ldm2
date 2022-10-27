<?php

namespace Rguj\LDM2\Database\Drivers\MongoDB;

class Field
{
    /**
     * Create MongoDB collection field.
     *
     * @param string $collection
     *
     * @return  \Rguj\LDM2\Database\Drivers\MongoDB\Collection
     */
    public static function create($collection, $clousure)
    {
        $clousure(new Collection($collection));
    }
}
