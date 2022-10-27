<?php

namespace Rguj\LDM2\Database\Types\Common;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class TextType extends Type
{
    const NAME = 'text';

    /**
     * Register text type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'text';
    }
}
