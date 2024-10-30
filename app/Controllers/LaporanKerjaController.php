<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LaporanKerjaController extends BaseController
{
	public function index()
	{
		$id_user = (session('userData')['id_user']);
		$data['judul'] = '<strong>Laporan Kerja</strong>';
		$data['model'] = $this->modelLaporanKerja
			->where('id_user', $id_user)
			->findAll();

		// Ambil data organisasi berdasarkan id_user
		$data_ormas = $this->modelOrmas->where('id_user', $id_user)->first();

		// Jika data organisasi ditemukan, ambil nilai tracking
		if ($data_ormas) {
			$data['tracking'] = $data_ormas['tracking'];
		} else {
			$data['tracking'] = null;
		}

		echo view('/laporankerja/index', $data);
	}

	public function tambah()
	{
		$id_user = (session('userData')['id_user']);
		$data_organisasi = $this->modelOrmas->getOrganisasiByIdUser($id_user);
		$data['judul'] = '<strong>Tambah Laporan Kerja</strong>';
		$data['url'] = 'laporankerja/tambah';
		$data['key'] = 'id_solusi';
		$data['model'] = $this->modelOrmas
			->where('id_user', $id_user)
			->findAll();

		// Panggil model untuk mengambil data organisasi berdasarkan id_user
		$data['nama_organisasi'] = $data_organisasi['nama_organisasi'];

		echo view('/laporankerja/tambah', $data);
	}

	public function insertData()
	{
		$id_user = session('userData')['id_user'];

		// Panggil model untuk mengambil data organisasi berdasarkan id_user
		$data_organisasi = $this->modelOrmas->getOrganisasiByIdUser($id_user);
		$id_ormas = $data_organisasi['id_ormas']; // Ambil id_ormas dari data organisasi
		$nama_organisasi = $data_organisasi['nama_organisasi']; // Ambil nama organisasi dari data organisasi

		$file1 = $this->request->getFile('foto');
		$filename1 = time() . $file1->getClientName();
		$file1->move(ROOTPATH . 'public/upload/', $filename1);

		$file2 = $this->request->getFile('foto1');
		$filename2 = time() . $file2->getClientName();
		$file2->move(ROOTPATH . 'public/upload/', $filename2);

		$file3 = $this->request->getFile('foto2');
		$filename3 = time() . $file3->getClientName();
		$file3->move(ROOTPATH . 'public/upload/', $filename3);

		$file4 = $this->request->getFile('foto3');
		$filename4 = '';

		if ($file4 && $file4->isValid()) {
			$filename4 = time() . $file4->getClientName();
			$file4->move(ROOTPATH . 'public/upload/', $filename4);
		} else {
		}

		$file5 = $this->request->getFile('foto4');
		$filename5 = '';

		if ($file5 && $file5->isValid()) {
			$filename5 = time() . $file5->getClientName();
			$file5->move(ROOTPATH . 'public/upload/', $filename5);
		} else {
		}

		$file6 = $this->request->getFile('foto5');
		$filename6 = '';

		if ($file6 && $file6->isValid()) {
			$filename6 = time() . $file6->getClientName();
			$file6->move(ROOTPATH . 'public/upload/', $filename6);
		} else {
		}

		$data = [
			'id_user' => $id_user,
			'id_ormas' => $id_ormas, // Menggunakan id_ormas dari data organisasi
			'nama_organisasi' => $nama_organisasi, // Menggunakan nama organisasi dari data organisasi
			'foto' => $filename1,
			'foto1' => $filename2,
			'foto2' => $filename3,
			'foto3' => $filename4,
			'foto4' => $filename5,
			'foto5' => $filename6,
			'judul' => $this->request->getPost('judul'),
			'tanggal' => date('Y-m-d H:i:s'),
			'status' => '1',
			'keterangan' => $this->request->getPost('keterangan'),
		];

		$this->modelLaporanKerja->save($data);

		// print_r($data);
		// exit;
		return redirect()->to(base_url() . '/laporankerja');
	}

	public function ubah()
	{
		$id_laporan_kerja = $this->req->uri->getSegment(3);
		$data['id_laporan_kerja'] = $id_laporan_kerja;
		$data['url'] = 'laporankerja/ubah';
		$data['judul'] = '<strong>Ubah Laporan Kerja</strong>';

		$data['modelLaporanKerja'] = $this->modelLaporanKerja
			// Untuk memunculkan id pada halam ubah
			->where('id_laporan_kerja', $id_laporan_kerja)
			// kalau find aja untuk satu data
			->findAll(1);

		echo view('/laporankerja/ubah', $data);
	}

	public function ubahData()
	{
		$file = $this->request->getFile('foto');
		$filename = time() . $file->getClientName();
		$file->move(ROOTPATH . 'public/upload/', $filename);

		$file1 = $this->request->getFile('foto1');
		$filename1 = time() . $file1->getClientName();
		$file1->move(ROOTPATH . 'public/upload/', $filename1);

		$file2 = $this->request->getFile('foto2');
		$filename2 = time() . $file2->getClientName();
		$file2->move(ROOTPATH . 'public/upload/', $filename2);

		$data =
			[
				'id_laporan_kerja' => $this->request->getPost('id_laporan_kerja'),
				'foto' => $filename,
				'foto1' => $filename1,
				'foto2' => $filename2,
				'tanggal' => date('Y-m-d H:i:s'),
				'judul' => $this->request->getPost('judul'),
				'keterangan' => $this->request->getPost('keterangan'),
			];

		$this->modelLaporanKerja->save($data);

		return redirect()->to(base_url() . '/laporankerja');
	}

	public function delete()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelLaporanKerja->delete($id);
		// fungsi untuk pindah halaman yang kita inginkan
		return redirect()->to(base_url() . '/laporankerja');
	}

	public function detail()
	{
		$id_laporan_kerja = $this->req->uri->getSegment(3);
		$data['id_laporan_kerja'] = $id_laporan_kerja;
		$data['judul'] = '<strong>Detail Laporan Kerja</strong>';
		$data['model'] = $this->modelLaporanKerja
			->where('id_laporan_kerja', $id_laporan_kerja)
			->findAll(1);

		echo view('/laporankerja/detail', $data);
	}

	public function ormas()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Laporan Kerja</stromg> ';
		$data['model'] = $this->modelLaporanKerja

			->where('id_ormas', $id_ormas)
			->findAll();

		echo view('/laporankerja/ormas', $data);
	}

	public function ormasdetail()
	{
		$id_laporan_kerja = $this->req->uri->getSegment(3);
		$data['judul'] = '<strong>Laporan Kerja</stromg> ';
		$data['model'] = $this->modelLaporanKerja

			->where('id_laporan_kerja', $id_laporan_kerja)
			->findAll(1);

		echo view('/laporankerja/ormasdetail', $data);
	}
}
