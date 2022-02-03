<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenrusakModel extends Model
{
    protected $table = 'dokumenrusak';
    protected $primaryKey = 'id_dokumenrusak';
    protected $useTimestamps = false;
    protected $allowedFields = ['tanggal', 'no_rm', 'nama_pasien', 'nama_pengganti', 'status'];


    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_dokumenrusak' => $id])->first();
        }
    }
    public function data_terakhir_dokumenrusak()
    {
        $builder = $this->db->table('dokumenrusak');
        $builder->orderBy('id_dokumenrusak', "DESc");
        $builder->limit(4);
        return $builder->get();
    }

    public function update_data($data, $id)
    {
        return $this->db->table('dokumenrusak')->update($data, ['id_dokumenrusak' => $id]);
    }
}
