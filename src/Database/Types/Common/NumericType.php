<?php

namespace Rguj\LDM2\Database\Types\Common;

use Doctrine\DBAL\Types\DecimalType as DoctrineDecimalType;

class NumericType extends DoctrineDecimalType
{
    const NAME = 'numeric';

    /**
     * Register numeric type.
     *
     * @return string.
     */
    public function getName()
    {
        return static::NAME;
    }
}
