<?php

namespace Rguj\LDM2\Database\Types\Mysql;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class BinaryType extends Type
{
    const NAME = 'binary';

    /**
     * Register binary type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $fieldDeclaration['length'] = empty($fieldDeclaration['length']) ? 255 : $fieldDeclaration['length'];

        return "binary({$fieldDeclaration['length']})";
    }
}
