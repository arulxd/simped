<?php

namespace App\Controllers;

use App\Models\DokumenrusakModel;

class Dokumenrusak extends BaseController
{
    public function __construct()
    {

        $this->dokumenrusakModel = new DokumenrusakModel();
    }
    public function create()
    {

        $data = [
            'dokumenrusak' => $this->dokumenrusakModel->getDetail(),
            'dokumenrusak' => $this->dokumenrusakModel->data_terakhir_dokumenrusak()

        ];

        return view('dokumenrusak', $data);
    }

    public function save()
    {
        $this->dokumenrusakModel->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'id_dokumenrusak' => session()->get('id_dokumenrusak'),
            'no_rm' => $this->request->getVar('no_rm'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'nama_pengganti' => $this->request->getVar('nama_pengganti'),
            'status' => $this->request->getVar('status'),


        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('dokumenrusak');
    }
}
