<?php

namespace Rguj\LDM2\Database\Types\Mysql;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class TinyIntType extends Type
{
    const NAME = 'tinyint';

    /**
     * Register tinyint type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'tinyint';
    }
}
