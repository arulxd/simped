<?php

namespace App\Models;

use CodeIgniter\Model;

class peminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $allowedFields = ['tanggal', 'no_rm', 'nama_pasien', 'nama_peminjam', 'status', 'keperluan', 'tanggal_kembali', 'created_at', 'updated_at'];


    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_peminjaman' => $id])->first();
        }
    }
}
