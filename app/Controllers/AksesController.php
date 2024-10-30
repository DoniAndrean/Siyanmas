<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AksesController extends BaseController
{
	public function index()
	{
		$data['judul'] = '<strong>Akses</strong> ';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
		} else {
			$query = '';
			$fitur = '';
		}

		$data['Akses'] = $this->modelAkses
			->join('ormas', 'ormas.id_user=akses.id_user', 'left')
			->like('akses.id_user', $query, 'both')
			->findAll();

		// $data['Akses'] = $this->modelAkses
		// 	->join('laporan_kerja', 'laporan_kerja.id_user=akses.id_user', 'left')
		// 	->like('akses.id_user', $query, 'both')
		// 	->findAll();

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

		echo view('/akses/index', $data);
	}

	public function tambah()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Tambah User</strong>';
		$data['url'] = 'akses/tambah';
		$data['id_ormas'] = $id_ormas;
		$data['model'] = $this->modelOrmas
			->findAll();

		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Tambah User</strong>';
		$data['url'] = 'akses/tambah';
		$data['id_ormas'] = $id_ormas;
		$data['model'] = $this->modelOrmas
			->findAll();

		// foreach ($data['model'] as $key => $value) {
		// 	print_r($value['nama_organisasi']);
		// }


		// exit;
		echo view('/akses/tambah', $data);
	}

	public function insertData()
	{
		$data = [
			'id_user' => $this->request->getPost('id_user'),
			// 'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'fitur' => $this->request->getPost('fitur'),
			'tanggal_mulai' => $this->request->getPost('tanggal_mulai'),
			'tanggal_selesai' => $this->request->getPost('tanggal_selesai'),
			'status' => $this->request->getPost('status'),
		];

		$this->modelAkses->save($data);

		return redirect()->to(base_url() . '/akses');
	}

	public function ubah()
	{
		$id_akses = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Ubah Akses</strong>';
		$data['url'] = 'akses/ubah';
		$data['id_akses'] = $id_akses;
		$data['akses'] = $this->modelAkses
			->where('id_akses', $id_akses)
			->findAll(1)[0];

		// echo $id_akses . '<br>';
		// print_r($data['akses']['id_user']);
		// print_r($data['akses']['fitur']);
		// exit;
		echo view('akses/ubah', $data);
	}

	public function ubahData()
	{
		$data =
			[
				'id_akses' => $this->request->getPost('id_akses'),
				'id_user' => $this->request->getPost('id_user'),
				'fitur' => $this->request->getPost('fitur'),
				'tanggal_mulai' => $this->request->getPost('tanggal_mulai'),
				'tanggal_selesai' => $this->request->getPost('tanggal_selesai'),
				'status' => $this->request->getPost('status'),
			];

		$this->modelAkses->save($data);

		return redirect()->to(base_url() . '/akses');
	}

	public function delete()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelAkses->delete($id);
		// fungsi untuk pindah halaman yang kita inginkan
		return redirect()->to(base_url() . '/akses');
	}
}
