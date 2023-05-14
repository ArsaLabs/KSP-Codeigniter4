<?php

namespace App\Controllers;

use CodeIgniter\Shield\Entities\User;

class Home extends BaseController
{
    //public $user;
    public function __construct()
    {
        $users = auth()->getProvider();
    }
    
    public function index()
    {
        $data = [
            'user' => auth()->user()
        ];
        return view('home', $data);
    }

    public function logout()
    {

        return auth()->logout();
    }
}
