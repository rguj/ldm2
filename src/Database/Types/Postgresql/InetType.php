<?php

namespace Rguj\LDM2\Database\Types\Postgresql;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class InetType extends Type
{
    const NAME = 'inet';

    /**
     * Register inet type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'inet';
    }
}
