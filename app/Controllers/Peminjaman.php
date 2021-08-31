<?php

namespace App\Controllers;

use App\Models\peminjamanModel;
use App\Models\dashboardModel;

class Peminjaman extends BaseController
{

    public function __construct()
    {

        $this->peminjamanModel = new peminjamanModel();
        $this->dashboardModel = new dashboardModel();
    }


    public function index()
    {
        $data = [
            'peminjaman' => $this->dashboardModel->data_terakhir()
        ];

        return view('peminjaman/create', $data);
    }

    public function list()
    {

        $data = [
            'peminjaman' => $this->peminjamanModel->getDetail()

        ];
        return view('peminjaman/list', $data);
    }

    public function detail($id)
    {

        $data = [
            'peminjamans' => $this->peminjamanModel->getDetail($id)
        ];
        return view('peminjaman/detail', $data);
    }

    public function delete($id)
    {

        $this->peminjamanModel->delete(['id_peminjaman' => $id]);

        return redirect()->to('/peminjaman/list');
    }

    public function save()
    {
        $this->peminjamanModel->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'no_rm' => $this->request->getVar('no_rm'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'nama_peminjam' => $this->request->getVar('nama_peminjam'),
            'keperluan' => $this->request->getVar('keperluan'),
            'status' => $this->request->getVar('status'),

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('peminjaman');
    }

    public function edit($id)
    {
        $data = [
            'peminjam' => $this->peminjamanModel->getDetail($id)
        ];

        return view('/peminjaman/editfulldata', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('id_peminjaman');

        $data = [

            'tanggal' => $this->request->getVar('tanggal'),
            'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
            'no_rm' => $this->request->getVar('no_rm'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'nama_peminjam' => $this->request->getVar('nama_peminjam'),
            'keperluan' => $this->request->getVar('keperluan'),
            'status' => $this->request->getVar('status')
        ];

        $this->peminjamanModel->update_data($data, $id);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('peminjaman/list');
    }

    public function updatefull($id)
    {

        $status = $this->request->getVar('status');

        if ($status == 'dikembalikan') {
            $this->peminjamanModel->save([
                'id_peminjaman' => $id,
                'tanggal' => $this->request->getVar('tanggal'),
                'no_rm' => $this->request->getVar('no_rm'),
                'nama_pasien' => $this->request->getVar('nama_pasien'),
                'nama_peminjam' => $this->request->getVar('nama_peminjam'),
                'keperluan' => $this->request->getVar('keperluan'),
                'status' => $this->request->getVar('status'),
                'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
            ]);


            session()->setFlashdata('pesan', 'Data Berhasil Diubah');

            return redirect()->to('peminjaman/list');
        } elseif ($status == 'dipinjam') {

            $this->peminjamanModel->save([
                'id_peminjaman' => $id,
                'tanggal' => $this->request->getVar('tanggal'),
                'no_rm' => $this->request->getVar('no_rm'),
                'nama_pasien' => $this->request->getVar('nama_pasien'),
                'nama_peminjam' => $this->request->getVar('nama_peminjam'),
                'keperluan' => $this->request->getVar('keperluan'),
                'status' => $this->request->getVar('status'),
                'tanggal_kembali' => $this->request->getVar(''),
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Diubah');

            return redirect()->to('peminjaman/list');
        }
    }
}
