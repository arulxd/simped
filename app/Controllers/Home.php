<?php

namespace App\Controllers;

use App\Models\dashboardModel;
use App\Models\peminjamanModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->dashboardModel = new dashboardModel();
        $this->peminjamanModel = new peminjamanModel();
    }

    public function index()
    {
        $data = [
            'jml_dokumen_dipinjam' => $this->dashboardModel->jml_dokumen_dipinjam(),
            'jml_dokumen_kembali' => $this->dashboardModel->jml_dokumen_kembali(),
            'jml_dokumen' => $this->dashboardModel->jml_dokumen(),
            'peminjaman' => $this->dashboardModel->data_terakhir(),
            'grafik' => $this->dashboardModel->grafik_peminjaman()

        ];


        return view('home', $data);
    }
}
