<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends BaseController
{

    public function index()
    {
        if (!isset(session('userData')['level_user'])) {
            return redirect()->to(base_url() . '/login');
        }
        $data['judul'] = '<strong>Dashboard</strong>';
        $grafik = [];
        $data['grafik'] = $grafik;
        if (isset($_GET['cari'])) {
            $query = $_GET['cari'];
            $bidang = $_GET['bidang'];
            $tahun = $_GET['tahun'];
            $jenis = $_GET['jenis'];
        } else {
            $query = '';
            $bidang = '';
            $tahun = '';
            $jenis = '';
        }


        $data['modelOrmas'] = $this->modelOrmas
            // ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
            // ->orderBy('no')
            ->like('nama_bidang', $bidang, 'both')
            ->like('nama_organisasi', $query, 'both')
            ->like('tahun', $tahun, 'both')
            ->like('no_induk', $jenis, 'both')
            // ->orLike('alamat', $query, 'both' )
            // ->orLike('ketua', $query, 'both' )
            ->findAll();

        $data['modelTotalOrmas'] = $this->modelOrmas
            ->findAll();

        $data['modelAgama'] = $this->modelOrmas
            ->like('nama_bidang', 'Agama', 'both')
            ->findAll();

        $data['modelAntiKorupsi'] = $this->modelOrmas
            ->like('nama_bidang', 'Anti Korupsi', 'both')
            ->findAll();

        $data['modelAntiNarkoba'] = $this->modelOrmas
            ->like('nama_bidang', 'Anti Narkoba', 'both')
            ->findAll();

        $data['modelBudaya'] = $this->modelOrmas
            ->like('nama_bidang', 'Budaya', 'both')
            ->findAll();

        $data['modelKemanusiaan'] = $this->modelOrmas
            ->like('nama_bidang', 'Kemanusiaan', 'both')
            ->findAll();

        $data['modelLingkunganHidup'] = $this->modelOrmas
            ->like('nama_bidang', 'Lingkungan Hidup', 'both')
            ->findAll();

        $data['modelOlahRaga'] = $this->modelOrmas
            ->like('nama_bidang', 'Olah Raga', 'both')
            ->findAll();

        $data['modelPendidikan'] = $this->modelOrmas
            ->like('nama_bidang', 'Pendidikan', 'both')
            ->findAll();

        $data['modelPengawasan'] = $this->modelOrmas
            ->like('nama_bidang', 'Pengawasan', 'both')
            ->findAll();

        $data['modelSeniBudaya'] = $this->modelOrmas
            ->like('nama_bidang', 'Seni Budaya', 'both')
            ->findAll();

        $data['modelSosial'] = $this->modelOrmas
            ->like('nama_bidang', 'Sosial', 'both')
            ->findAll();

        $data['modelSwadayaMasyarakat'] = $this->modelOrmas
            ->like('nama_bidang', 'Swadaya Masyarakat', 'both')
            ->findAll();

        $data['modelUMKN'] = $this->modelOrmas
            ->like('nama_bidang', 'UMKN', 'both')
            ->findAll();

        $data['modelDll'] = $this->modelOrmas
            ->like('nama_bidang', 'Dll-', 'both')
            ->findAll();

        $data['modelSKHU'] = $this->modelOrmas
            ->like('no_induk', 'AHU-', 'both')
            ->findAll();

        $data['modelSKT'] = $this->modelOrmas
            ->like('no_induk', 'SKT-', 'both')
            ->findAll();

        $data['model2017'] = $this->modelOrmas
            ->like('tahun', '2017', 'both')
            ->findAll();

        $data['model2018'] = $this->modelOrmas
            ->like('tahun', '2018', 'both')
            ->findAll();

        $data['model2019'] = $this->modelOrmas
            ->like('tahun', '2019', 'both')
            ->findAll();

        $data['model2020'] = $this->modelOrmas
            ->like('tahun', '2020', 'both')
            ->findAll();

        $data['model2021'] = $this->modelOrmas
            ->like('tahun', '2021', 'both')
            ->findAll();

        $data['model2022'] = $this->modelOrmas
            ->like('tahun', '2022', 'both')
            ->findAll();

        $data['model2023'] = $this->modelOrmas
            ->like('tahun', '2023', 'both')
            ->findAll();
        return view('/dashboard', $data);
    }
}
