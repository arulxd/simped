<?php

namespace App\Models;

use CodeIgniter\Model;

class dashboardModel extends Model
{
    public function jml_dokumen_dipinjam()
    {
        return $this->db->table('peminjaman')->like('status', 'dipinjam')->countAllResults();
    }
    public function jml_dokumen_kembali()
    {
        return $this->db->table('peminjaman')->like('status', 'dikembalikan')->countAllResults();
    }
    public function jml_dokumen()
    {
        return $this->db->table('peminjaman')->countAllResults();
    }

    public function data_terakhir()
    {
        $builder = $this->db->table('peminjaman');
        $builder->orderBy('id_peminjaman', "DESc");
        $builder->limit(4);

        return $builder->get();
    }
    public function grafik_peminjaman()
    {
        return $this->db->table('peminjaman')->get()->getResultArray();
    }
}
