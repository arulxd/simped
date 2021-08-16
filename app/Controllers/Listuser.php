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
        $data = [
            'user' => $this->AuthModel->getDetail()

        ];


        if (session()->get('level') <> 1) {
            return redirect()->to('home');
        }

        return view('register', $data);
    }

    // public function list()
    // {

    //     $data = [
    //         'peminjaman' => $this->peminjamanModel->getDetail()

    //     ];


    //     // $peminjamanModel = new \App\Models\peminjamanModel();
    //     // $peminjamanModel = new peminjamanModel();
    //     //  $peminjaman = $peminjamanModel->findAll();
    //     //  dd($peminjaman);

    //     return view('listuser', $data);
    // }
}
