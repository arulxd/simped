<?php

namespace App\Controllers;

use App\Models\assemblingModel;

class Assembling extends BaseController
{
    public function __construct()
    {

        $this->assemblingModel = new assemblingModel();
    }


    public function index()
    {

        return view('assembling/create');
    }

    public function save()
    {


        $this->assemblingModel->save([
            'nama_ruang' => $this->request->getVar('nama_ruang'),
            'id_assembling' => session()->get('id_assembling'),
            'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
            'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
            'keterlambatan' => $this->request->getVar('keterlambatan'),


        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('assembling');
    }
}
