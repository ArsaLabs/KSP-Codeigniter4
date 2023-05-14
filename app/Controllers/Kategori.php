<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
    public function nasabah()
    {
        return view('kategori/nasabah');
    }

    public function transaksi()
    {
        return view('kategori/transaksi');
    }
}
