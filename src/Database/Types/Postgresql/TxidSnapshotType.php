<?php

namespace Rguj\LDM2\Database\Types\Postgresql;

use Rguj\LDM2\Database\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class TxidSnapshotType extends Type
{
    const NAME = 'txid_snapshot';

    /**
     * Register txid_snapshot type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'txid_snapshot';
    }
}
