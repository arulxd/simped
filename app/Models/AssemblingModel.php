<?php

namespace App\Models;

use CodeIgniter\Model;

class assemblingModel extends Model
{
    protected $table = 'assembling';
    protected $primaryKey = 'id_assembling';
    protected $useTimestamps = false;

    protected $allowedFields = ['nama_ruang', 'tanggal_masuk', 'tanggal_keluar', 'keterlambatan'];


    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_assembling' => $id])->first();
        }
    }
}
