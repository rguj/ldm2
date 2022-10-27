<?php

namespace Rguj\LDM2\Database\Types\Mysql;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class TimeStampType extends Type
{
    const NAME = 'timestamp';

    /**
     * Register timestamp type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        if (isset($fieldDeclaration['default'])) {
            return 'timestamp';
        }

        return 'timestamp null';
    }
}
