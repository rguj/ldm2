<?php

namespace Rguj\LDM2\Database\Types\Postgresql;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class MoneyType extends Type
{
    const NAME = 'money';

    /**
     * Register money type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'money';
    }
}
