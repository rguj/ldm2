<?php

namespace Rguj\LDM2\Database\Types\Mysql;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class MultiPointType extends Type
{
    const NAME = 'multipoint';

    /**
     * Register multipoint type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'multipoint';
    }
}
