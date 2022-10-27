<?php

namespace Rguj\LDM2\Database\Types\Common;

use Doctrine\DBAL\Types\StringType as DoctrineStringType;

class VarCharType extends DoctrineStringType
{
    const NAME = 'varchar';

    /**
     * Register varchar type.
     *
     * @return string
     */
    public function getName()
    {
        return static::NAME;
    }
}
