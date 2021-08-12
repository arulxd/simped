<?php

namespace App\Controllers;

use App\Models\laporantestModel;
use PhpParser\Node\Stmt\Echo_;

class Laporantest extends BaseController
{

    public function __construct()
    {
        $this->laporantestModel = new laporantestModel();
    }


    public function index()

    {

        $data = [
            'tahun' => $this->laporantestModel->getTahun(),
            // 'status' => $this->laporanModel->getStatus()
        ];

        return view('laporan/laporan_peminjaman', $data);
    }

    public function filter()
    {


        $tahun1 = $this->request->getVar('tahun1');
        $bulanawal = $this->request->getVar('bulanawal');

        $tahun2 = $this->request->getVar('tahun2');
        $nilaifilter = $this->request->getVar('nilaifilter');
        $periode = $this->request->getVar('periode');
        $status = $this->request->getVar('status');
        $nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');


        // LAPORAN DATA PEMINJAMAN DOKUMEN PER BULAN  //
        if (($nilaifilter == 1) and ($periode == 1) and ($status == 'dipinjam')) {

            $data = [
                'title' =>  "Laporan Data Peminjaman Dokumen Per Bulan",
                'subtitle' => "Dari bulan : " . $nama_bulan[$bulanawal] . ' Tahun : ' . $tahun2,
                'status_dokumen' => "Status Dokumen : " . $status,
                'datafilter' => $this->laporantestModel->filterbybulan($tahun2, $bulanawal, $status)
            ];

            return view('laporan/print_laporan_data_pinjam', $data);
        } elseif (($nilaifilter == 1) and ($periode == 1) and ($status == 'dikembalikan')) {

            $data = [
                'title' =>  "Laporan Data Peminjaman Dokumen  Per Bulan",
                'subtitle' => "Dari bulan : " . $nama_bulan[$bulanawal] . ' Tahun : ' . $tahun2,
                'status_dokumen' => "Status Dokumen : " . $status,
                'datafilter' => $this->laporantestModel->filterbybulan($tahun2, $bulanawal, $status)
            ];

            return view('laporan/print_laporan_data_kembali', $data);
        } elseif (($nilaifilter == 1) and ($periode == 1) and ($status == '')) {

            $data = [
                'title' =>  "Laporan Data Peminjaman Dokumen  Per Bulan",
                'subtitle' => "Dari bulan : " . $nama_bulan[$bulanawal] . ' Tahun : ' . $tahun2,
                'status_dokumen' => "Status Dokumen : " . 'Semua',
                'datafilter' => $this->laporantestModel->filterbybulan($tahun2, $bulanawal, $status)
            ];

            return view('laporan/print_laporan_data_kembali', $data);

            // LAPORAN JUMLAH PEMINJAMAN DOKUMEN PER BULAN  //
        } elseif (($nilaifilter == 3) and ($periode == 1) and ($status == '')) {

            $data = [
                'title' =>  "Laporan Jumlah Peminjaman Dokumen  Per Bulan",
                'subtitle' => "Bulan : " . $nama_bulan[$bulanawal] . ' Tahun : ' . $tahun2,
                'status_dokumen' => "Status Dokumen : " . 'Semua',
                'bulan' => $nama_bulan[$bulanawal],
                'datafilter' => $this->laporantestModel->jml_peminjaman_bln($tahun2, $bulanawal, $status)
            ];

            return view('laporan/jml_dokumen_bln', $data);
        } elseif (($nilaifilter == 3) and ($periode == 1) and ($status == 'dipinjam')) {

            $data = [
                'title' =>  "Laporan Jumlah Peminjaman Dokumen  Per Bulan",
                'subtitle' => "Bulan : " . $nama_bulan[$bulanawal] . ' Tahun : ' . $tahun2,
                'status_dokumen' => "Status Dokumen : " . $status,
                'bulan' => $nama_bulan[$bulanawal],

                'datafilter' => $this->laporantestModel->jml_peminjaman_bln($tahun2, $bulanawal, $status)
            ];

            return view('laporan/jml_dokumen_bln', $data);
        } elseif (($nilaifilter == 3) and ($periode == 1) and ($status == 'dikembalikan')) {

            $data = [
                'title' =>  "Laporan Jumlah Peminjaman Dokumen  Per Bulan",
                'subtitle' => "Bulan : " . $nama_bulan[$bulanawal] . ' Tahun : ' . $tahun2,
                'status_dokumen' => "Status Dokumen : " . $status,
                'bulan' => $nama_bulan[$bulanawal],

                'datafilter' => $this->laporantestModel->jml_peminjaman_bln($tahun2, $bulanawal, $status)
            ];

            return view('laporan/jml_dokumen_bln', $data);

            // LAPORAN JUMLAH PEMINJAMAN DOKUMEN PER TAHUN  //

        } elseif ($nilaifilter == 3 and ($periode == 2) and ($status == 'dipinjam')) {
            $data = [

                'title' =>  "Laporan Jumlah Peminjaman Dokumen Tahunan",
                'subtitle' =>  ' Tahun : ' . $tahun2,
                'tahun' => $tahun2,
                'status_dokumen' => "Status Dokumen : " . $status,
                'datafilter' => $this->laporantestModel->jml_peminjaman_thn(),

            ];

            return view('laporan/jml_dokumen_thn', $data);
        } elseif ($nilaifilter == 3 and ($periode == 2) and ($status == 'dikembalikan')) {
            $data = [

                'title' =>  "Laporan Jumlah Peminjaman Dokumen Tahunan",
                'subtitle' =>  ' Tahun : ' . $tahun2,
                'tahun' => $tahun2,
                'status_dokumen' => "Status Dokumen : " . $status,
                'datafilter' => $this->laporantestModel->jml_peminjaman_thn_kembali(),

            ];

            return view('laporan/jml_dokumen_thn', $data);
        } elseif ($nilaifilter == 3 and ($periode == 2) and ($status == '')) {
            $data = [

                'title' =>  "Laporan Jumlah Peminjaman Dokumen Tahunan",
                'subtitle' =>  ' Tahun : ' . $tahun2,
                'tahun' => $tahun2,
                'status_dokumen' => "Status Dokumen : " . 'Semua',
                'datafilter' => $this->laporantestModel->jml_peminjaman_thn_semua(),

            ];

            return view('laporan/jml_dokumen_thn', $data);
        }
    }
}
