<?php

namespace App\Models;

use CodeIgniter\Model;

class laporanModel extends Model
{
    public function getTahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM peminjaman GROUP BY YEAR(tanggal) ORDER BY YEAR(tanggal) ASC");

        return $query->getResult();
    }




    public function filterbytanggal($tanggalawal, $tanggalakhir, $status)
    {

        $query = $this->db->query("SELECT * FROM peminjaman WHERE status = '$status' AND tanggal BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal ASC ");

        return $query->getResult();
    }



    public function filterbybulan($tahun1, $bulanawal, $bulanakhir, $status)
    {

        $query = $this->db->query("SELECT * from peminjaman where  YEAR(tanggal) = '$tahun1' and MONTH(tanggal) BETWEEN '$bulanawal' and '$bulanakhir' and status ='$status' ORDER BY tanggal ASC ");

        return $query->getResult();
    }

    function filterbytahun($tahun2, $status)
    {

        $query = $this->db->query("SELECT * from peminjaman where YEAR(tanggal) = '$tahun2'  ORDER BY status = '$status' and tanggal ASC ");

        return $query->getResult();
    }
}
