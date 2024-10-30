<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class CobaController extends BaseController
{
    public function index()
    {
        $id_ormas = $this->req->uri->getSegment(3);
        $data['id_ormas'] = $id_ormas;
        $data['judul'] = '<strong>Proses Pengajuan SKT</strong>';
        $data['Ormas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
            ->findAll(1);

        echo view('/proses/index', $data);
    }


public function tambah()
    {
        $data['judul'] = '<strong>Tambah</strong>';
        $data['url'] = 'coba/tambah';
        $data['id_faq'] = 'id_ormas';

        echo view('/coba/tambah', $data);
    }

    public function insertData()
    {

        $data = [
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'npm' => $this->request->getPost('npm'),
            'nomor_hp' => $this->request->getPost('nomor_hp'), 
        ];

        $this->modelOrmas->save($data);
        // print_r($data);
        // exit();
        return redirect()->to(base_url() . '/coba');
    }
}