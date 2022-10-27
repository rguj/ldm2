<?php

namespace Rguj\LDM2\Database\Types\Postgresql;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class TimeTzType extends Type
{
    const NAME = 'timetz';

    /**
     * Register timetz type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'time(0) with time zone';
    }
}
