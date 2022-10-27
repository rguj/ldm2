<?php

namespace Rguj\LDM2\Database\Types\Common;

use Doctrine\DBAL\Types\FloatType as DoctrineFloatType;

class DoubleType extends DoctrineFloatType
{
    const NAME = 'double';

    /**
     * Register double type.
     *
     * @return string
     */
    public function getName()
    {
        return static::NAME;
    }
}
