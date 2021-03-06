<?php

namespace App\Models;

use CodeIgniter\Model;

class laporantestModel extends Model
{


    public function getTahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM peminjaman and dokumenrusak GROUP BY YEAR(tanggal) ORDER BY YEAR(tanggal) ASC");

        return $query->getResult();
    }

    public function filterbybulan($tahun2, $bulanawal, $status)
    {

        $query = $this->db->query("SELECT * from peminjaman where  YEAR(tanggal) = '$tahun2' and MONTH(tanggal) = '$bulanawal' and status ='$status' ORDER BY tanggal ASC ");

        return $query->getResult();
    }
    public function filterbybulansemua($tahun2, $bulanawal)
    {

        $query = $this->db->query("SELECT * from peminjaman where  YEAR(tanggal) = '$tahun2' and MONTH(tanggal) = '$bulanawal' and status ORDER BY tanggal ASC ");

        return $query->getResult();
    }

    function filterbytahun($tahun2, $status)
    {

        $query = $this->db->query("SELECT * from peminjaman where YEAR(tanggal) = '$tahun2'  ORDER BY status = '$status' and tanggal ASC ");

        return $query->getResult();
    }

    public function jml_peminjaman_thn()
    {
        return $this->db->table('peminjaman')->like('status', 'dipinjam')->countAllResults();
    }

    public function jml_peminjaman_thn_kembali()
    {
        return $this->db->table('peminjaman')->like('status', 'dikembalikan')->countAllResults();
    }

    public function jml_peminjaman_thn_semua()
    {
        return $this->db->table('peminjaman')->like('status')->countAllResults();
    }
    public function jml_peminjaman_bln($tahun2, $bulanawal, $status)
    {

        return $this->db->table('peminjaman')->where('year(tanggal)', $tahun2)->where('month(tanggal)', $bulanawal)->where('status', $status)->orderBy('tanggal')->countAllResults();
    }
    public function jml_peminjaman_bln_semua($tahun2, $bulanawal)
    {

        return $this->db->table('peminjaman')->where('year(tanggal)', $tahun2)->where('month(tanggal)', $bulanawal)->like('status')->orderBy('tanggal')->countAllResults();
    }

    public function jml_peminjaman_dokumenrusak_thn()
    {
        return $this->db->table('dokumenrusak')->like('nama_pengganti')->countAllResults();
    }
}
