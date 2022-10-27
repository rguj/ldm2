<?php

namespace Rguj\LDM2\Models;

use Rguj\LDM2\Traits\Relationships;
use Jenssegers\Mongodb\Eloquent\Model;

class DBM_MongoMenu extends Model
{
    use Relationships;
    //
    protected $collection = 'menus';

    public function items()
    {
        return $this->hasMany(MenuItem::class, 'menu_id');
    }
}
