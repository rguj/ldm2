<?php

namespace Rguj\LDM2\Database\Types\Postgresql;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class IntervalType extends Type
{
    const NAME = 'interval';

    /**
     * Register interval type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'interval';
    }
}
