<?php

namespace App\Controllers;

use CodeIgniter\Shield\Entities\User;

class Form extends BaseController
{
    
    public function __construct()
    {
        
    }
    
    public function pengajuan()
    {
        return view('form/form_pengajuan');
    }

    
}
