<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Listuser extends BaseController

{


    public function __construct()
    {
        $this->AuthModel = new AuthModel();
    }

    public function index()
    {
        if (session()->get('level') <> 1) {
            return redirect()->to('home');
        }

        return view('register');
    }
}
