<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Data extends BaseController
{
    public function nasabah()
    {
        return view('data/d_nasabah');
    }

    public function collector()
    {
        return view('data/d_collector');
    }
}
