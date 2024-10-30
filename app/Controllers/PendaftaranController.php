<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PendaftaranController extends BaseController
{
	public function daftar()
	{
		$id_user = (session('userData')['id_user']);
		$data['judul'] = '<strong>Pendaftaran Organisasi Kemasyarakatan</strong>';
		$data['id_ormas'] = 'id_ormas';
		$data['url'] = 'pendaftaran/daftar';
		$data['model'] = $this->modelOrmas
			->where('id_user', $id_user)
			->findAll();

		$tgl = date('Y-m-d');

		$data['modelakses'] = $this->modelAkses
			->where('id_user', $id_user)
			->where('status', 'Aktif')
			->where('fitur', 'Pendaftaran Ormas')
			->where('tanggal_mulai <=', $tgl)
			->where('tanggal_selesai >=', $tgl)
			->findAll();

		echo view('/pendaftaran/daftar', $data);
	}

	public function insertData()
	{
		$file1 = $this->request->getFile('skt');
		$filename1 = time() . $file1->getClientName();
		$file1->move(ROOTPATH . 'public/upload/', $filename1);

		$file2 = $this->request->getFile('sk_pengurus');
		$filename2 = time() . $file2->getClientName();
		$file2->move(ROOTPATH . 'public/upload/', $filename2);

		$file3 = $this->request->getFile('program_kerja');
		$filename3 = time() . $file3->getClientName();
		$file3->move(ROOTPATH . 'public/upload/', $filename3);

		$file4 = $this->request->getFile('domisili');
		$filename4 = time() . $file4->getClientName();
		$file4->move(ROOTPATH . 'public/upload/', $filename4);

		$file5 = $this->request->getFile('ad_art');
		$filename5 = time() . $file5->getClientName();
		$file5->move(ROOTPATH . 'public/upload/', $filename5);

		$file6 = $this->request->getFile('foto_ketua');
		$filename6 = time() . $file6->getClientName();
		$file6->move(ROOTPATH . 'public/upload/', $filename6);

		$file7 = $this->request->getFile('foto_bendahara');
		$filename7 = time() . $file7->getClientName();
		$file7->move(ROOTPATH . 'public/upload/', $filename7);

		$file8 = $this->request->getFile('foto_sekretaris');
		$filename8 = time() . $file8->getClientName();
		$file8->move(ROOTPATH . 'public/upload/', $filename8);

		$file9 = $this->request->getFile('ktp_ketua');
		$filename9 = time() . $file9->getClientName();
		$file9->move(ROOTPATH . 'public/upload/', $filename9);

		$file10 = $this->request->getFile('ktp_bendahara');
		$filename10 = time() . $file10->getClientName();
		$file10->move(ROOTPATH . 'public/upload/', $filename10);

		$file11 = $this->request->getFile('ktp_sekretaris');
		$filename11 = time() . $file11->getClientName();
		$file11->move(ROOTPATH . 'public/upload/', $filename11);

		$file12 = $this->request->getFile('akte_pendirian');
		$filename12 = time() . $file12->getClientName();
		$file12->move(ROOTPATH . 'public/upload/', $filename12);

		$data = [
			'id_user' => session('userData')['id_user'],
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'alamat' => $this->request->getPost('alamat'),
			'tanggal' => $this->request->getPost('tanggal'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'skt' => $filename1,
			'sk_pengurus' => $filename2,
			'program_kerja' => $filename3,
			'domisili' => $filename4,
			'ad_art' => $filename5,
			'foto_ketua' => $filename6,
			'foto_bendahara' => $filename7,
			'foto_sekretaris' => $filename8,
			'ktp_ketua' => $filename9,
			'ktp_bendahara' => $filename10,
			'ktp_sekretaris' => $filename11,
			'akte_pendirian' => $filename12,
			'tanggal' => date('Y-m-d H:i:s'),
			'status' => 'Pendaftaran',
			'tracking' => '0',
			'proses' => '2',
			'alur_proses' => 'Nerry Cludio Popindo S. STP',
		];

		$this->modelOrmas->save($data);
		// print_r($data);
		// exit();


		return redirect()->to(base_url() . '/pendaftaran/daftar');
	}

	public function kirim()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Kirim Surat</strong>';
		$data['url'] = 'pendaftaran/kirim';
		$data['id_ormas'] = $id_ormas;
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);
		echo view('pendaftaran/kirim', $data);
	}

	public function updateKirim()
	{
		$data = [
			'id_ormas' => $this->request->getPost('id_ormas'),
			'no_keberadaan' => $this->request->getPost('no_keberadaan'),
			'tahun' => $this->request->getPost('tahun'),
			'berakhirnya' => $this->request->getPost('berakhirnya'),
			'tanggal' => date('Y-m-d H:i:s'),
		];

		$file1 = $this->request->getFile('kartu_ormas');
		$filename1 = time() . $file1->getClientName();
		if (!empty($file1->getClientName())) {
			$filename1 = time() . $file1->getClientName();
			$file1->move(ROOTPATH . 'public/upload/', $filename1);
			$data['kartu_ormas'] = $filename1;
		}

		$file2 = $this->request->getFile('sk_keberadaan');
		$filename2 = time() . $file2->getClientName();
		if (!empty($file2->getClientName())) {
			$filename2 = time() . $file2->getClientName();
			$file2->move(ROOTPATH . 'public/upload/', $filename2);
			$data['sk_keberadaan'] = $filename2;
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index6');
	}

	public function index()
	{
		$data['judul'] = 'Informasi Pendaftaran';
		$data['url'] = 'pendaftaran';
		$data['key'] = 'id_ormas';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
		} else {
			$query = '';
		}


		$data['modelOrmas'] = $this->modelOrmas
			->where('status', 'Pendaftaran')
			->where('tracking', '0')
			->like('nama_organisasi', $query, 'both')

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

		echo view('/pendaftaran/index', $data);
	}

	public function index1()
	{
		$data['judul'] = 'Informasi Pendaftaran';
		$data['url'] = 'pendaftaran';
		$data['key'] = 'id_ormas';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
		} else {
			$query = '';
		}


		$data['modelOrmas'] = $this->modelOrmas
			->where('status', 'Pendaftaran')
			->where('tracking', '1')
			->like('nama_organisasi', $query, 'both')

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

		echo view('/pendaftaran/index1', $data);
	}

	public function index2()
	{
		$data['judul'] = 'Informasi Pendaftaran';
		$data['url'] = 'pendaftaran';
		$data['key'] = 'id_ormas';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
		} else {
			$query = '';
		}


		$data['modelOrmas'] = $this->modelOrmas
			->where('status', 'Pendaftaran')
			->where('tracking', '2')
			->like('nama_organisasi', $query, 'both')

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

		echo view('/pendaftaran/index2', $data);
	}

	public function index3()
	{
		$data['judul'] = 'Informasi Pendaftaran';
		$data['url'] = 'pendaftaran';
		$data['key'] = 'id_ormas';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
		} else {
			$query = '';
		}


		$data['modelOrmas'] = $this->modelOrmas
			->where('status', 'Pendaftaran')
			->where('tracking', '3')
			->like('nama_organisasi', $query, 'both')

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

		echo view('/pendaftaran/index3', $data);
	}

	public function index4()
	{
		$data['judul'] = 'Informasi Pendaftaran';
		$data['url'] = 'pendaftaran';
		$data['key'] = 'id_ormas';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
		} else {
			$query = '';
		}


		$data['modelOrmas'] = $this->modelOrmas
			->where('status', 'Pendaftaran')
			->where('tracking', '4')
			->like('nama_organisasi', $query, 'both')

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

		echo view('/pendaftaran/index4', $data);
	}

	public function index5()
	{
		$data['judul'] = 'Informasi Pendaftaran';
		$data['url'] = 'pendaftaran';
		$data['key'] = 'id_ormas';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
		} else {
			$query = '';
		}


		$data['modelOrmas'] = $this->modelOrmas
			->where('status', 'Pendaftaran')
			->where('tracking', '5')
			->like('nama_organisasi', $query, 'both')

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

		echo view('/pendaftaran/index5', $data);
	}

	public function index6()
	{
		$data['judul'] = 'Informasi Pendaftaran';
		$data['url'] = 'pendaftaran';
		$data['key'] = 'id_ormas';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
		} else {
			$query = '';
		}


		$data['modelOrmas'] = $this->modelOrmas
			->where('status', 'Pendaftaran')
			->where('tracking', '6')
			->like('nama_organisasi', $query, 'both')

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

		echo view('/pendaftaran/index6', $data);
	}

	public function detailormas()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = '<strong>Informasi Pendaftaran</strong>';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/pendaftaran/detailormas', $data);
	}

	public function detail()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = '<strong>Informasi Pendaftaran</strong>';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/pendaftaran/detail', $data);
	}

	public function detail1()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = '<strong>Informasi Pendaftaran</strong>';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/pendaftaran/detail1', $data);
	}

	public function detail2()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = '<strong>Informasi Pendaftaran</strong>';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/pendaftaran/detail2', $data);
	}

	public function detail3()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = '<strong>Informasi Pendaftaran</strong>';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/pendaftaran/detail3', $data);
	}

	public function detail4()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = '<strong>Informasi Pendaftaran</strong>';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/pendaftaran/detail4', $data);
	}

	public function detail5()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = '<strong>Informasi Pendaftaran</strong>';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/pendaftaran/detail5', $data);
	}

	public function detail6()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = '<strong>Informasi Pendaftaran</strong>';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/pendaftaran/detail6', $data);
	}

	public function verify()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$tracking = $this->req->uri->getSegment(4);

		// Mengatur nilai alur_proses berdasarkan nilai tracking
		$alur_proses = '';
		if ($tracking == '1') {
			$alur_proses = 'Rizky Muhari Yahfis, S.STP., M.Si';
		} else {
			// Default jika nilai tracking tidak sesuai
			$alur_proses = 'Proses belum selesai';
		}

		$data = [
			'id_ormas' => $id_ormas,
			'tracking' => $tracking,
			'alur_proses' => $alur_proses,
		];

		// Simpan data ke dalam database
		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index');
	}

	public function verify1()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$tracking = $this->req->uri->getSegment(4);

		$alur_proses = '';
		if ($tracking == '2') {
			$alur_proses = 'Murnis';
		} else {
			$alur_proses = 'Proses belum selesai';
		}

		$data = [
			'id_ormas' => $id_ormas,
			'tracking' => $tracking,
			'alur_proses' => $alur_proses,
		];

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index1');
	}

	public function verify2()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$tracking = $this->req->uri->getSegment(4);

		$alur_proses = '';
		if ($tracking == '3') {
			$alur_proses = 'Jendri Salmon Ginting, AP., M.Si';
		} else {
			$alur_proses = 'Proses belum selesai';
		}

		$data = [
			'id_ormas' => $id_ormas,
			'tracking' => $tracking,
			'alur_proses' => $alur_proses,
		];

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index2');
	}

	public function verify3()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$tracking = $this->req->uri->getSegment(4);

		$alur_proses = '';
		if ($tracking == '4') {
			$alur_proses = 'Lil Fadly Jamil,S.STP., M.Si';
		} else {
			$alur_proses = 'Proses belum selesai';
		}

		$data = [
			'id_ormas' => $id_ormas,
			'tracking' => $tracking,
			'alur_proses' => $alur_proses,
		];

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index3');
	}

	public function verify4()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$tracking = $this->req->uri->getSegment(4);

		$alur_proses = '';
		if ($tracking == '5') {
			$alur_proses = 'Indra Prayoga, S.STP';
		} else {
			$alur_proses = 'Proses belum selesai';
		}

		$data = [
			'id_ormas' => $id_ormas,
			'tracking' => $tracking,
			'alur_proses' => $alur_proses,
		];

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index4');
	}

	public function verify5()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$tracking = $this->req->uri->getSegment(4);

		$alur_proses = '';
		if ($tracking == '6') {
			$alur_proses = 'Nerry Cloudio Popindo S.STP';
		} else {
			$alur_proses = 'Proses belum selesai';
		}

		$data = [
			'id_ormas' => $id_ormas,
			'tracking' => $tracking,
			'alur_proses' => $alur_proses,
		];

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index5');
	}

	public function verify6()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$tracking = $this->req->uri->getSegment(4);

		// Mengatur nilai alur_proses berdasarkan nilai tracking
		$alur_proses = '';
		if ($tracking == '7') {
			$alur_proses = 'Proses Telah Selesai dan Sudah Di Verifikasi';
		} else {
			// Default jika nilai tracking tidak sesuai
			$alur_proses = 'Proses belum selesai';
		}

		$data = [
			'id_ormas' => $id_ormas,
			'tracking' => $tracking,
			'alur_proses' => $alur_proses,
		];

		// Simpan data ke dalam database
		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index6');
	}

	public function ubahormas()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Edit Pengajuan SKT</strong>';
		$data['url'] = 'pendaftaran/ubahormas';
		$data['id_ormas'] = $id_ormas;
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);
		echo view('pendaftaran/ubahormas', $data);
	}

	public function updateDataormas()
	{
		$data = [

			'id_ormas' => $this->request->getPost('id_ormas'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'alamat' => $this->request->getPost('alamat'),
			'tanggal' => $this->request->getPost('tanggal'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'tanggal' => date('Y-m-d H:i:s'),
		];

		$file = $this->request->getFile('skt');
		$filename = time() . $file->getClientName();
		if (!empty($file->getClientName())) {
			$filename = time() . $file->getClientName();
			$file->move(ROOTPATH . 'public/upload/', $filename);
			$data['skt'] = $filename;
		}

		$file1 = $this->request->getFile('sk_pengurus');
		$filename1 = time() . $file1->getClientName();
		if (!empty($file1->getClientName())) {
			$filename1 = time() . $file1->getClientName();
			$file1->move(ROOTPATH . 'public/upload/', $filename1);
			$data['sk_pengurus'] = $filename1;
		}

		$file2 = $this->request->getFile('program_kerja');
		$filename2 = time() . $file2->getClientName();
		if (!empty($file2->getClientName())) {
			$filename2 = time() . $file2->getClientName();
			$file2->move(ROOTPATH . 'public/upload/', $filename2);
			$data['program_kerja'] = $filename2;
		}

		$file3 = $this->request->getFile('domisili');
		$filename3 = time() . $file3->getClientName();
		if (!empty($file3->getClientName())) {
			$filename3 = time() . $file3->getClientName();
			$file3->move(ROOTPATH . 'public/upload/', $filename3);
			$data['domisili'] = $filename3;
		}

		$file4 = $this->request->getFile('ad_art');
		$filename4 = time() . $file4->getClientName();
		if (!empty($file4->getClientName())) {
			$filename4 = time() . $file4->getClientName();
			$file4->move(ROOTPATH . 'public/upload/', $filename4);
			$data['ad_art'] = $filename4;
		}

		$file5 = $this->request->getFile('foto_ketua');
		$filename5 = time() . $file5->getClientName();
		if (!empty($file5->getClientName())) {
			$filename5 = time() . $file5->getClientName();
			$file5->move(ROOTPATH . 'public/upload/', $filename5);
			$data['foto_ketua'] = $filename5;
		}

		$file6 = $this->request->getFile('foto_bendahara');
		$filename6 = time() . $file6->getClientName();
		if (!empty($file6->getClientName())) {
			$filename6 = time() . $file6->getClientName();
			$file6->move(ROOTPATH . 'public/upload/', $filename6);
			$data['foto_bendahara'] = $filename6;
		}

		$file7 = $this->request->getFile('foto_sekretaris');
		$filename7 = time() . $file7->getClientName();
		if (!empty($file7->getClientName())) {
			$filename7 = time() . $file7->getClientName();
			$file7->move(ROOTPATH . 'public/upload/', $filename7);
			$data['foto_sekretaris'] = $filename7;
		}

		$file8 = $this->request->getFile('ktp_ketua');
		$filename8 = time() . $file8->getClientName();
		if (!empty($file8->getClientName())) {
			$filename8 = time() . $file8->getClientName();
			$file8->move(ROOTPATH . 'public/upload/', $filename8);
			$data['ktp_ketua'] = $filename8;
		}

		$file9 = $this->request->getFile('ktp_bendahara');
		$filename9 = time() . $file9->getClientName();
		if (!empty($file9->getClientName())) {
			$filename9 = time() . $file9->getClientName();
			$file9->move(ROOTPATH . 'public/upload/', $filename9);
			$data['ktp_bendahara'] = $filename9;
		}

		$file10 = $this->request->getFile('ktp_sekretaris');
		$filename10 = time() . $file10->getClientName();
		if (!empty($file10->getClientName())) {
			$filename10 = time() . $file10->getClientName();
			$file10->move(ROOTPATH . 'public/upload/', $filename10);
			$data['ktp_sekretaris'] = $filename10;
		}

		$file11 = $this->request->getFile('akte_pendirian');
		$filename11 = time() . $file11->getClientName();
		if (!empty($file11->getClientName())) {
			$filename11 = time() . $file11->getClientName();
			$file11->move(ROOTPATH . 'public/upload/', $filename11);
			$data['akte_pendirian'] = $filename11;
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/daftar');
	}
	public function ubah()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Edit Pengajuan SKT</strong>';
		$data['url'] = 'pendaftaran/ubah';
		$data['id_ormas'] = $id_ormas;
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);
		echo view('pendaftaran/ubah', $data);
	}

	public function updateData()
	{
		$data = [

			'id_ormas' => $this->request->getPost('id_ormas'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'alamat' => $this->request->getPost('alamat'),
			'tanggal' => $this->request->getPost('tanggal'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'tanggal' => date('Y-m-d H:i:s'),
		];

		$file = $this->request->getFile('skt');
		$filename = time() . $file->getClientName();
		if (!empty($file->getClientName())) {
			$filename = time() . $file->getClientName();
			$file->move(ROOTPATH . 'public/upload/', $filename);
			$data['skt'] = $filename;
		}

		$file1 = $this->request->getFile('sk_pengurus');
		$filename1 = time() . $file1->getClientName();
		if (!empty($file1->getClientName())) {
			$filename1 = time() . $file1->getClientName();
			$file1->move(ROOTPATH . 'public/upload/', $filename1);
			$data['sk_pengurus'] = $filename1;
		}

		$file2 = $this->request->getFile('program_kerja');
		$filename2 = time() . $file2->getClientName();
		if (!empty($file2->getClientName())) {
			$filename2 = time() . $file2->getClientName();
			$file2->move(ROOTPATH . 'public/upload/', $filename2);
			$data['program_kerja'] = $filename2;
		}

		$file3 = $this->request->getFile('domisili');
		$filename3 = time() . $file3->getClientName();
		if (!empty($file3->getClientName())) {
			$filename3 = time() . $file3->getClientName();
			$file3->move(ROOTPATH . 'public/upload/', $filename3);
			$data['domisili'] = $filename3;
		}

		$file4 = $this->request->getFile('ad_art');
		$filename4 = time() . $file4->getClientName();
		if (!empty($file4->getClientName())) {
			$filename4 = time() . $file4->getClientName();
			$file4->move(ROOTPATH . 'public/upload/', $filename4);
			$data['ad_art'] = $filename4;
		}

		$file5 = $this->request->getFile('foto_ketua');
		$filename5 = time() . $file5->getClientName();
		if (!empty($file5->getClientName())) {
			$filename5 = time() . $file5->getClientName();
			$file5->move(ROOTPATH . 'public/upload/', $filename5);
			$data['foto_ketua'] = $filename5;
		}

		$file6 = $this->request->getFile('foto_bendahara');
		$filename6 = time() . $file6->getClientName();
		if (!empty($file6->getClientName())) {
			$filename6 = time() . $file6->getClientName();
			$file6->move(ROOTPATH . 'public/upload/', $filename6);
			$data['foto_bendahara'] = $filename6;
		}

		$file7 = $this->request->getFile('foto_sekretaris');
		$filename7 = time() . $file7->getClientName();
		if (!empty($file7->getClientName())) {
			$filename7 = time() . $file7->getClientName();
			$file7->move(ROOTPATH . 'public/upload/', $filename7);
			$data['foto_sekretaris'] = $filename7;
		}

		$file8 = $this->request->getFile('ktp_ketua');
		$filename8 = time() . $file8->getClientName();
		if (!empty($file8->getClientName())) {
			$filename8 = time() . $file8->getClientName();
			$file8->move(ROOTPATH . 'public/upload/', $filename8);
			$data['ktp_ketua'] = $filename8;
		}

		$file9 = $this->request->getFile('ktp_bendahara');
		$filename9 = time() . $file9->getClientName();
		if (!empty($file9->getClientName())) {
			$filename9 = time() . $file9->getClientName();
			$file9->move(ROOTPATH . 'public/upload/', $filename9);
			$data['ktp_bendahara'] = $filename9;
		}

		$file10 = $this->request->getFile('ktp_sekretaris');
		$filename10 = time() . $file10->getClientName();
		if (!empty($file10->getClientName())) {
			$filename10 = time() . $file10->getClientName();
			$file10->move(ROOTPATH . 'public/upload/', $filename10);
			$data['ktp_sekretaris'] = $filename10;
		}

		$file11 = $this->request->getFile('akte_pendirian');
		$filename11 = time() . $file11->getClientName();
		if (!empty($file11->getClientName())) {
			$filename11 = time() . $file11->getClientName();
			$file11->move(ROOTPATH . 'public/upload/', $filename11);
			$data['akte_pendirian'] = $filename11;
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index');
	}

	public function ubah1()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Edit Pengajuan SKT</strong>';
		$data['url'] = 'pendaftaran/ubah1';
		$data['id_ormas'] = $id_ormas;
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);
		echo view('pendaftaran/ubah1', $data);
	}

	public function updateData1()
	{
		$data = [

			'id_ormas' => $this->request->getPost('id_ormas'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'alamat' => $this->request->getPost('alamat'),
			'tanggal' => $this->request->getPost('tanggal'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'tanggal' => date('Y-m-d H:i:s'),
		];

		$file = $this->request->getFile('skt');
		$filename = time() . $file->getClientName();
		if (!empty($file->getClientName())) {
			$filename = time() . $file->getClientName();
			$file->move(ROOTPATH . 'public/upload/', $filename);
			$data['skt'] = $filename;
		}

		$file1 = $this->request->getFile('sk_pengurus');
		$filename1 = time() . $file1->getClientName();
		if (!empty($file1->getClientName())) {
			$filename1 = time() . $file1->getClientName();
			$file1->move(ROOTPATH . 'public/upload/', $filename1);
			$data['sk_pengurus'] = $filename1;
		}

		$file2 = $this->request->getFile('program_kerja');
		$filename2 = time() . $file2->getClientName();
		if (!empty($file2->getClientName())) {
			$filename2 = time() . $file2->getClientName();
			$file2->move(ROOTPATH . 'public/upload/', $filename2);
			$data['program_kerja'] = $filename2;
		}

		$file3 = $this->request->getFile('domisili');
		$filename3 = time() . $file3->getClientName();
		if (!empty($file3->getClientName())) {
			$filename3 = time() . $file3->getClientName();
			$file3->move(ROOTPATH . 'public/upload/', $filename3);
			$data['domisili'] = $filename3;
		}

		$file4 = $this->request->getFile('ad_art');
		$filename4 = time() . $file4->getClientName();
		if (!empty($file4->getClientName())) {
			$filename4 = time() . $file4->getClientName();
			$file4->move(ROOTPATH . 'public/upload/', $filename4);
			$data['ad_art'] = $filename4;
		}

		$file5 = $this->request->getFile('foto_ketua');
		$filename5 = time() . $file5->getClientName();
		if (!empty($file5->getClientName())) {
			$filename5 = time() . $file5->getClientName();
			$file5->move(ROOTPATH . 'public/upload/', $filename5);
			$data['foto_ketua'] = $filename5;
		}

		$file6 = $this->request->getFile('foto_bendahara');
		$filename6 = time() . $file6->getClientName();
		if (!empty($file6->getClientName())) {
			$filename6 = time() . $file6->getClientName();
			$file6->move(ROOTPATH . 'public/upload/', $filename6);
			$data['foto_bendahara'] = $filename6;
		}

		$file7 = $this->request->getFile('foto_sekretaris');
		$filename7 = time() . $file7->getClientName();
		if (!empty($file7->getClientName())) {
			$filename7 = time() . $file7->getClientName();
			$file7->move(ROOTPATH . 'public/upload/', $filename7);
			$data['foto_sekretaris'] = $filename7;
		}

		$file8 = $this->request->getFile('ktp_ketua');
		$filename8 = time() . $file8->getClientName();
		if (!empty($file8->getClientName())) {
			$filename8 = time() . $file8->getClientName();
			$file8->move(ROOTPATH . 'public/upload/', $filename8);
			$data['ktp_ketua'] = $filename8;
		}

		$file9 = $this->request->getFile('ktp_bendahara');
		$filename9 = time() . $file9->getClientName();
		if (!empty($file9->getClientName())) {
			$filename9 = time() . $file9->getClientName();
			$file9->move(ROOTPATH . 'public/upload/', $filename9);
			$data['ktp_bendahara'] = $filename9;
		}

		$file10 = $this->request->getFile('ktp_sekretaris');
		$filename10 = time() . $file10->getClientName();
		if (!empty($file10->getClientName())) {
			$filename10 = time() . $file10->getClientName();
			$file10->move(ROOTPATH . 'public/upload/', $filename10);
			$data['ktp_sekretaris'] = $filename10;
		}

		$file11 = $this->request->getFile('akte_pendirian');
		$filename11 = time() . $file11->getClientName();
		if (!empty($file11->getClientName())) {
			$filename11 = time() . $file11->getClientName();
			$file11->move(ROOTPATH . 'public/upload/', $filename11);
			$data['akte_pendirian'] = $filename11;
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index1');
	}

	public function ubah2()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Edit Pengajuan SKT</strong>';
		$data['url'] = 'pendaftaran/ubah2';
		$data['id_ormas'] = $id_ormas;
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);
		echo view('pendaftaran/ubah2', $data);
	}

	public function updateData2()
	{
		$data = [

			'id_ormas' => $this->request->getPost('id_ormas'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'alamat' => $this->request->getPost('alamat'),
			'tanggal' => $this->request->getPost('tanggal'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'tanggal' => date('Y-m-d H:i:s'),
		];

		$file = $this->request->getFile('skt');
		$filename = time() . $file->getClientName();
		if (!empty($file->getClientName())) {
			$filename = time() . $file->getClientName();
			$file->move(ROOTPATH . 'public/upload/', $filename);
			$data['skt'] = $filename;
		}

		$file1 = $this->request->getFile('sk_pengurus');
		$filename1 = time() . $file1->getClientName();
		if (!empty($file1->getClientName())) {
			$filename1 = time() . $file1->getClientName();
			$file1->move(ROOTPATH . 'public/upload/', $filename1);
			$data['sk_pengurus'] = $filename1;
		}

		$file2 = $this->request->getFile('program_kerja');
		$filename2 = time() . $file2->getClientName();
		if (!empty($file2->getClientName())) {
			$filename2 = time() . $file2->getClientName();
			$file2->move(ROOTPATH . 'public/upload/', $filename2);
			$data['program_kerja'] = $filename2;
		}

		$file3 = $this->request->getFile('domisili');
		$filename3 = time() . $file3->getClientName();
		if (!empty($file3->getClientName())) {
			$filename3 = time() . $file3->getClientName();
			$file3->move(ROOTPATH . 'public/upload/', $filename3);
			$data['domisili'] = $filename3;
		}

		$file4 = $this->request->getFile('ad_art');
		$filename4 = time() . $file4->getClientName();
		if (!empty($file4->getClientName())) {
			$filename4 = time() . $file4->getClientName();
			$file4->move(ROOTPATH . 'public/upload/', $filename4);
			$data['ad_art'] = $filename4;
		}

		$file5 = $this->request->getFile('foto_ketua');
		$filename5 = time() . $file5->getClientName();
		if (!empty($file5->getClientName())) {
			$filename5 = time() . $file5->getClientName();
			$file5->move(ROOTPATH . 'public/upload/', $filename5);
			$data['foto_ketua'] = $filename5;
		}

		$file6 = $this->request->getFile('foto_bendahara');
		$filename6 = time() . $file6->getClientName();
		if (!empty($file6->getClientName())) {
			$filename6 = time() . $file6->getClientName();
			$file6->move(ROOTPATH . 'public/upload/', $filename6);
			$data['foto_bendahara'] = $filename6;
		}

		$file7 = $this->request->getFile('foto_sekretaris');
		$filename7 = time() . $file7->getClientName();
		if (!empty($file7->getClientName())) {
			$filename7 = time() . $file7->getClientName();
			$file7->move(ROOTPATH . 'public/upload/', $filename7);
			$data['foto_sekretaris'] = $filename7;
		}

		$file8 = $this->request->getFile('ktp_ketua');
		$filename8 = time() . $file8->getClientName();
		if (!empty($file8->getClientName())) {
			$filename8 = time() . $file8->getClientName();
			$file8->move(ROOTPATH . 'public/upload/', $filename8);
			$data['ktp_ketua'] = $filename8;
		}

		$file9 = $this->request->getFile('ktp_bendahara');
		$filename9 = time() . $file9->getClientName();
		if (!empty($file9->getClientName())) {
			$filename9 = time() . $file9->getClientName();
			$file9->move(ROOTPATH . 'public/upload/', $filename9);
			$data['ktp_bendahara'] = $filename9;
		}

		$file10 = $this->request->getFile('ktp_sekretaris');
		$filename10 = time() . $file10->getClientName();
		if (!empty($file10->getClientName())) {
			$filename10 = time() . $file10->getClientName();
			$file10->move(ROOTPATH . 'public/upload/', $filename10);
			$data['ktp_sekretaris'] = $filename10;
		}

		$file11 = $this->request->getFile('akte_pendirian');
		$filename11 = time() . $file11->getClientName();
		if (!empty($file11->getClientName())) {
			$filename11 = time() . $file11->getClientName();
			$file11->move(ROOTPATH . 'public/upload/', $filename11);
			$data['akte_pendirian'] = $filename11;
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index2');
	}

	public function ubah3()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Edit Pengajuan SKT</strong>';
		$data['url'] = 'pendaftaran/ubah3';
		$data['id_ormas'] = $id_ormas;
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);
		echo view('pendaftaran/ubah3', $data);
	}

	public function updateData3()
	{
		$data = [

			'id_ormas' => $this->request->getPost('id_ormas'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'alamat' => $this->request->getPost('alamat'),
			'tanggal' => $this->request->getPost('tanggal'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'tanggal' => date('Y-m-d H:i:s'),
		];

		$file = $this->request->getFile('skt');
		$filename = time() . $file->getClientName();
		if (!empty($file->getClientName())) {
			$filename = time() . $file->getClientName();
			$file->move(ROOTPATH . 'public/upload/', $filename);
			$data['skt'] = $filename;
		}

		$file1 = $this->request->getFile('sk_pengurus');
		$filename1 = time() . $file1->getClientName();
		if (!empty($file1->getClientName())) {
			$filename1 = time() . $file1->getClientName();
			$file1->move(ROOTPATH . 'public/upload/', $filename1);
			$data['sk_pengurus'] = $filename1;
		}

		$file2 = $this->request->getFile('program_kerja');
		$filename2 = time() . $file2->getClientName();
		if (!empty($file2->getClientName())) {
			$filename2 = time() . $file2->getClientName();
			$file2->move(ROOTPATH . 'public/upload/', $filename2);
			$data['program_kerja'] = $filename2;
		}

		$file3 = $this->request->getFile('domisili');
		$filename3 = time() . $file3->getClientName();
		if (!empty($file3->getClientName())) {
			$filename3 = time() . $file3->getClientName();
			$file3->move(ROOTPATH . 'public/upload/', $filename3);
			$data['domisili'] = $filename3;
		}

		$file4 = $this->request->getFile('ad_art');
		$filename4 = time() . $file4->getClientName();
		if (!empty($file4->getClientName())) {
			$filename4 = time() . $file4->getClientName();
			$file4->move(ROOTPATH . 'public/upload/', $filename4);
			$data['ad_art'] = $filename4;
		}

		$file5 = $this->request->getFile('foto_ketua');
		$filename5 = time() . $file5->getClientName();
		if (!empty($file5->getClientName())) {
			$filename5 = time() . $file5->getClientName();
			$file5->move(ROOTPATH . 'public/upload/', $filename5);
			$data['foto_ketua'] = $filename5;
		}

		$file6 = $this->request->getFile('foto_bendahara');
		$filename6 = time() . $file6->getClientName();
		if (!empty($file6->getClientName())) {
			$filename6 = time() . $file6->getClientName();
			$file6->move(ROOTPATH . 'public/upload/', $filename6);
			$data['foto_bendahara'] = $filename6;
		}

		$file7 = $this->request->getFile('foto_sekretaris');
		$filename7 = time() . $file7->getClientName();
		if (!empty($file7->getClientName())) {
			$filename7 = time() . $file7->getClientName();
			$file7->move(ROOTPATH . 'public/upload/', $filename7);
			$data['foto_sekretaris'] = $filename7;
		}

		$file8 = $this->request->getFile('ktp_ketua');
		$filename8 = time() . $file8->getClientName();
		if (!empty($file8->getClientName())) {
			$filename8 = time() . $file8->getClientName();
			$file8->move(ROOTPATH . 'public/upload/', $filename8);
			$data['ktp_ketua'] = $filename8;
		}

		$file9 = $this->request->getFile('ktp_bendahara');
		$filename9 = time() . $file9->getClientName();
		if (!empty($file9->getClientName())) {
			$filename9 = time() . $file9->getClientName();
			$file9->move(ROOTPATH . 'public/upload/', $filename9);
			$data['ktp_bendahara'] = $filename9;
		}

		$file10 = $this->request->getFile('ktp_sekretaris');
		$filename10 = time() . $file10->getClientName();
		if (!empty($file10->getClientName())) {
			$filename10 = time() . $file10->getClientName();
			$file10->move(ROOTPATH . 'public/upload/', $filename10);
			$data['ktp_sekretaris'] = $filename10;
		}

		$file11 = $this->request->getFile('akte_pendirian');
		$filename11 = time() . $file11->getClientName();
		if (!empty($file11->getClientName())) {
			$filename11 = time() . $file11->getClientName();
			$file11->move(ROOTPATH . 'public/upload/', $filename11);
			$data['akte_pendirian'] = $filename11;
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index3');
	}

	public function ubah4()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Edit Pengajuan SKT</strong>';
		$data['url'] = 'pendaftaran/ubah4';
		$data['id_ormas'] = $id_ormas;
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);
		echo view('pendaftaran/ubah4', $data);
	}

	public function updateData4()
	{
		$data = [

			'id_ormas' => $this->request->getPost('id_ormas'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'alamat' => $this->request->getPost('alamat'),
			'tanggal' => $this->request->getPost('tanggal'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'tanggal' => date('Y-m-d H:i:s'),
		];

		$file = $this->request->getFile('skt');
		$filename = time() . $file->getClientName();
		if (!empty($file->getClientName())) {
			$filename = time() . $file->getClientName();
			$file->move(ROOTPATH . 'public/upload/', $filename);
			$data['skt'] = $filename;
		}

		$file1 = $this->request->getFile('sk_pengurus');
		$filename1 = time() . $file1->getClientName();
		if (!empty($file1->getClientName())) {
			$filename1 = time() . $file1->getClientName();
			$file1->move(ROOTPATH . 'public/upload/', $filename1);
			$data['sk_pengurus'] = $filename1;
		}

		$file2 = $this->request->getFile('program_kerja');
		$filename2 = time() . $file2->getClientName();
		if (!empty($file2->getClientName())) {
			$filename2 = time() . $file2->getClientName();
			$file2->move(ROOTPATH . 'public/upload/', $filename2);
			$data['program_kerja'] = $filename2;
		}

		$file3 = $this->request->getFile('domisili');
		$filename3 = time() . $file3->getClientName();
		if (!empty($file3->getClientName())) {
			$filename3 = time() . $file3->getClientName();
			$file3->move(ROOTPATH . 'public/upload/', $filename3);
			$data['domisili'] = $filename3;
		}

		$file4 = $this->request->getFile('ad_art');
		$filename4 = time() . $file4->getClientName();
		if (!empty($file4->getClientName())) {
			$filename4 = time() . $file4->getClientName();
			$file4->move(ROOTPATH . 'public/upload/', $filename4);
			$data['ad_art'] = $filename4;
		}

		$file5 = $this->request->getFile('foto_ketua');
		$filename5 = time() . $file5->getClientName();
		if (!empty($file5->getClientName())) {
			$filename5 = time() . $file5->getClientName();
			$file5->move(ROOTPATH . 'public/upload/', $filename5);
			$data['foto_ketua'] = $filename5;
		}

		$file6 = $this->request->getFile('foto_bendahara');
		$filename6 = time() . $file6->getClientName();
		if (!empty($file6->getClientName())) {
			$filename6 = time() . $file6->getClientName();
			$file6->move(ROOTPATH . 'public/upload/', $filename6);
			$data['foto_bendahara'] = $filename6;
		}

		$file7 = $this->request->getFile('foto_sekretaris');
		$filename7 = time() . $file7->getClientName();
		if (!empty($file7->getClientName())) {
			$filename7 = time() . $file7->getClientName();
			$file7->move(ROOTPATH . 'public/upload/', $filename7);
			$data['foto_sekretaris'] = $filename7;
		}

		$file8 = $this->request->getFile('ktp_ketua');
		$filename8 = time() . $file8->getClientName();
		if (!empty($file8->getClientName())) {
			$filename8 = time() . $file8->getClientName();
			$file8->move(ROOTPATH . 'public/upload/', $filename8);
			$data['ktp_ketua'] = $filename8;
		}

		$file9 = $this->request->getFile('ktp_bendahara');
		$filename9 = time() . $file9->getClientName();
		if (!empty($file9->getClientName())) {
			$filename9 = time() . $file9->getClientName();
			$file9->move(ROOTPATH . 'public/upload/', $filename9);
			$data['ktp_bendahara'] = $filename9;
		}

		$file10 = $this->request->getFile('ktp_sekretaris');
		$filename10 = time() . $file10->getClientName();
		if (!empty($file10->getClientName())) {
			$filename10 = time() . $file10->getClientName();
			$file10->move(ROOTPATH . 'public/upload/', $filename10);
			$data['ktp_sekretaris'] = $filename10;
		}

		$file11 = $this->request->getFile('akte_pendirian');
		$filename11 = time() . $file11->getClientName();
		if (!empty($file11->getClientName())) {
			$filename11 = time() . $file11->getClientName();
			$file11->move(ROOTPATH . 'public/upload/', $filename11);
			$data['akte_pendirian'] = $filename11;
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index4');
	}

	public function ubah5()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Edit Pengajuan SKT</strong>';
		$data['url'] = 'pendaftaran/ubah5';
		$data['id_ormas'] = $id_ormas;
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);
		echo view('pendaftaran/ubah5', $data);
	}

	public function updateData5()
	{
		$data = [

			'id_ormas' => $this->request->getPost('id_ormas'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'alamat' => $this->request->getPost('alamat'),
			'tanggal' => $this->request->getPost('tanggal'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'tanggal' => date('Y-m-d H:i:s'),
		];

		$file = $this->request->getFile('skt');
		$filename = time() . $file->getClientName();
		if (!empty($file->getClientName())) {
			$filename = time() . $file->getClientName();
			$file->move(ROOTPATH . 'public/upload/', $filename);
			$data['skt'] = $filename;
		}

		$file1 = $this->request->getFile('sk_pengurus');
		$filename1 = time() . $file1->getClientName();
		if (!empty($file1->getClientName())) {
			$filename1 = time() . $file1->getClientName();
			$file1->move(ROOTPATH . 'public/upload/', $filename1);
			$data['sk_pengurus'] = $filename1;
		}

		$file2 = $this->request->getFile('program_kerja');
		$filename2 = time() . $file2->getClientName();
		if (!empty($file2->getClientName())) {
			$filename2 = time() . $file2->getClientName();
			$file2->move(ROOTPATH . 'public/upload/', $filename2);
			$data['program_kerja'] = $filename2;
		}

		$file3 = $this->request->getFile('domisili');
		$filename3 = time() . $file3->getClientName();
		if (!empty($file3->getClientName())) {
			$filename3 = time() . $file3->getClientName();
			$file3->move(ROOTPATH . 'public/upload/', $filename3);
			$data['domisili'] = $filename3;
		}

		$file4 = $this->request->getFile('ad_art');
		$filename4 = time() . $file4->getClientName();
		if (!empty($file4->getClientName())) {
			$filename4 = time() . $file4->getClientName();
			$file4->move(ROOTPATH . 'public/upload/', $filename4);
			$data['ad_art'] = $filename4;
		}

		$file5 = $this->request->getFile('foto_ketua');
		$filename5 = time() . $file5->getClientName();
		if (!empty($file5->getClientName())) {
			$filename5 = time() . $file5->getClientName();
			$file5->move(ROOTPATH . 'public/upload/', $filename5);
			$data['foto_ketua'] = $filename5;
		}

		$file6 = $this->request->getFile('foto_bendahara');
		$filename6 = time() . $file6->getClientName();
		if (!empty($file6->getClientName())) {
			$filename6 = time() . $file6->getClientName();
			$file6->move(ROOTPATH . 'public/upload/', $filename6);
			$data['foto_bendahara'] = $filename6;
		}

		$file7 = $this->request->getFile('foto_sekretaris');
		$filename7 = time() . $file7->getClientName();
		if (!empty($file7->getClientName())) {
			$filename7 = time() . $file7->getClientName();
			$file7->move(ROOTPATH . 'public/upload/', $filename7);
			$data['foto_sekretaris'] = $filename7;
		}

		$file8 = $this->request->getFile('ktp_ketua');
		$filename8 = time() . $file8->getClientName();
		if (!empty($file8->getClientName())) {
			$filename8 = time() . $file8->getClientName();
			$file8->move(ROOTPATH . 'public/upload/', $filename8);
			$data['ktp_ketua'] = $filename8;
		}

		$file9 = $this->request->getFile('ktp_bendahara');
		$filename9 = time() . $file9->getClientName();
		if (!empty($file9->getClientName())) {
			$filename9 = time() . $file9->getClientName();
			$file9->move(ROOTPATH . 'public/upload/', $filename9);
			$data['ktp_bendahara'] = $filename9;
		}

		$file10 = $this->request->getFile('ktp_sekretaris');
		$filename10 = time() . $file10->getClientName();
		if (!empty($file10->getClientName())) {
			$filename10 = time() . $file10->getClientName();
			$file10->move(ROOTPATH . 'public/upload/', $filename10);
			$data['ktp_sekretaris'] = $filename10;
		}

		$file11 = $this->request->getFile('akte_pendirian');
		$filename11 = time() . $file11->getClientName();
		if (!empty($file11->getClientName())) {
			$filename11 = time() . $file11->getClientName();
			$file11->move(ROOTPATH . 'public/upload/', $filename11);
			$data['akte_pendirian'] = $filename11;
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index5');
	}

	public function ubah6()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Edit Pengajuan SKT</strong>';
		$data['url'] = 'pendaftaran/ubah6';
		$data['id_ormas'] = $id_ormas;
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);
		echo view('pendaftaran/ubah6', $data);
	}

	public function updateData6()
	{
		$data = [

			'id_ormas' => $this->request->getPost('id_ormas'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'alamat' => $this->request->getPost('alamat'),
			'tanggal' => $this->request->getPost('tanggal'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'tanggal' => date('Y-m-d H:i:s'),
		];

		$file = $this->request->getFile('skt');
		$filename = time() . $file->getClientName();
		if (!empty($file->getClientName())) {
			$filename = time() . $file->getClientName();
			$file->move(ROOTPATH . 'public/upload/', $filename);
			$data['skt'] = $filename;
		}

		$file1 = $this->request->getFile('sk_pengurus');
		$filename1 = time() . $file1->getClientName();
		if (!empty($file1->getClientName())) {
			$filename1 = time() . $file1->getClientName();
			$file1->move(ROOTPATH . 'public/upload/', $filename1);
			$data['sk_pengurus'] = $filename1;
		}

		$file2 = $this->request->getFile('program_kerja');
		$filename2 = time() . $file2->getClientName();
		if (!empty($file2->getClientName())) {
			$filename2 = time() . $file2->getClientName();
			$file2->move(ROOTPATH . 'public/upload/', $filename2);
			$data['program_kerja'] = $filename2;
		}

		$file3 = $this->request->getFile('domisili');
		$filename3 = time() . $file3->getClientName();
		if (!empty($file3->getClientName())) {
			$filename3 = time() . $file3->getClientName();
			$file3->move(ROOTPATH . 'public/upload/', $filename3);
			$data['domisili'] = $filename3;
		}

		$file4 = $this->request->getFile('ad_art');
		$filename4 = time() . $file4->getClientName();
		if (!empty($file4->getClientName())) {
			$filename4 = time() . $file4->getClientName();
			$file4->move(ROOTPATH . 'public/upload/', $filename4);
			$data['ad_art'] = $filename4;
		}

		$file5 = $this->request->getFile('foto_ketua');
		$filename5 = time() . $file5->getClientName();
		if (!empty($file5->getClientName())) {
			$filename5 = time() . $file5->getClientName();
			$file5->move(ROOTPATH . 'public/upload/', $filename5);
			$data['foto_ketua'] = $filename5;
		}

		$file6 = $this->request->getFile('foto_bendahara');
		$filename6 = time() . $file6->getClientName();
		if (!empty($file6->getClientName())) {
			$filename6 = time() . $file6->getClientName();
			$file6->move(ROOTPATH . 'public/upload/', $filename6);
			$data['foto_bendahara'] = $filename6;
		}

		$file7 = $this->request->getFile('foto_sekretaris');
		$filename7 = time() . $file7->getClientName();
		if (!empty($file7->getClientName())) {
			$filename7 = time() . $file7->getClientName();
			$file7->move(ROOTPATH . 'public/upload/', $filename7);
			$data['foto_sekretaris'] = $filename7;
		}

		$file8 = $this->request->getFile('ktp_ketua');
		$filename8 = time() . $file8->getClientName();
		if (!empty($file8->getClientName())) {
			$filename8 = time() . $file8->getClientName();
			$file8->move(ROOTPATH . 'public/upload/', $filename8);
			$data['ktp_ketua'] = $filename8;
		}

		$file9 = $this->request->getFile('ktp_bendahara');
		$filename9 = time() . $file9->getClientName();
		if (!empty($file9->getClientName())) {
			$filename9 = time() . $file9->getClientName();
			$file9->move(ROOTPATH . 'public/upload/', $filename9);
			$data['ktp_bendahara'] = $filename9;
		}

		$file10 = $this->request->getFile('ktp_sekretaris');
		$filename10 = time() . $file10->getClientName();
		if (!empty($file10->getClientName())) {
			$filename10 = time() . $file10->getClientName();
			$file10->move(ROOTPATH . 'public/upload/', $filename10);
			$data['ktp_sekretaris'] = $filename10;
		}

		$file11 = $this->request->getFile('akte_pendirian');
		$filename11 = time() . $file11->getClientName();
		if (!empty($file11->getClientName())) {
			$filename11 = time() . $file11->getClientName();
			$file11->move(ROOTPATH . 'public/upload/', $filename11);
			$data['akte_pendirian'] = $filename11;
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/pendaftaran/index6');
	}

	public function delete()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelOrmas->delete($id);
		return redirect()->to(base_url() . '/pendaftaran/index');
	}

	public function delete1()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelOrmas->delete($id);
		return redirect()->to(base_url() . '/pendaftaran/index1');
	}

	public function delete2()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelOrmas->delete($id);
		return redirect()->to(base_url() . '/pendaftaran/index2');
	}

	public function delete3()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelOrmas->delete($id);
		return redirect()->to(base_url() . '/pendaftaran/index3');
	}

	public function delete4()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelOrmas->delete($id);
		return redirect()->to(base_url() . '/pendaftaran/index4');
	}

	public function delete5()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelOrmas->delete($id);
		return redirect()->to(base_url() . '/pendaftaran/index5');
	}

	public function delete6()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelOrmas->delete($id);
		return redirect()->to(base_url() . '/pendaftaran/index6');
	}
}
