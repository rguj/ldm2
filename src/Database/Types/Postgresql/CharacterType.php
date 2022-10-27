<?php

namespace Rguj\LDM2\Database\Types\Postgresql;

use Rguj\LDM2\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    const NAME = 'character';
    const DBTYPE = 'bpchar';
}
