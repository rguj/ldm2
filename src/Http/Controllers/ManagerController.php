<?php

namespace Rguj\LDM2\Http\Controllers;

use Rguj\LDM2\Facades\Manager as DBM;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    /**
     * Load database manager assests.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function assets(Request $request)
    {
        dd( DBM::assets($request->path));
        return DBM::assets($request->path);
    }
}
