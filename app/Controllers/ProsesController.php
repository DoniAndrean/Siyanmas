<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProsesController extends BaseController
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

    public function index1()
    {
        $id_ormas = $this->req->uri->getSegment(3);
        $data['id_ormas'] = $id_ormas;
        $data['judul'] = '<strong>Proses Pendaftaran</strong>';
        $data['Ormas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
            ->findAll(1);

        echo view('/proses/index1', $data);
    }
}
