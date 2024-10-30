<?php

namespace App\Controllers;

use TCPDF;

use CodeIgniter\Controller;

class InformasikelolasktController extends BaseController
{
	public function index()
	{
		$data['judul'] = '<strong>Informasi Pencatatan Keberadaan</strong>';
		$data['url'] = 'solusi';
		$data['key'] = 'id_solusi';
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

		$data['bidang'] = $bidang;
		$data['cari'] = $query;
		$data['tahun'] = $tahun;
		$data['jenis'] = $jenis;


		$data['modelOrmas'] = $this->modelOrmas

			->like('nama_bidang', $bidang, 'both')
			->like('nama_organisasi', $query, 'both')
			->like('tahun', $tahun, 'both')
			->like('no_induk', $jenis, 'both')
			->where('tracking IS NULL')
			->orwhere('tracking', '7')
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

		$data['model2024'] = $this->modelOrmas
			->like('tahun', '2024', 'both')
			->findAll();

		echo view('/informasikelola/index', $data);
	}

	public function detail()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = '<strong>Informasi Pencatatan Keberadaan</strong>';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/informasikelola/detail', $data);
	}

	// fungsi cetak untuk menampilkan pdf
	public function cetak()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['judul'] = 'Sistem Informasi Pencatatan Keberadaan';
		$data['url'] = 'solusi';
		$data['key'] = 'id_solusi';
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
			->where('id_ormas', $id_ormas)
			->like('nama_bidang', $bidang, 'both')
			->like('nama_organisasi', $query, 'both')
			->like('tahun', $tahun, 'both')
			->like('no_induk', $jenis, 'both')
			// ->orLike('alamat', $query, 'both' )
			// ->orLike('ketua', $query, 'both' )
			->findAll(1);


		$html = view('informasikelola/cetak', $data);

		$pdf = new TCPDF('L', PDF_UNIT, 'F4', true, 'UTF-8', false);

		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Dea Venditama');
		$pdf->SetTitle('Cetak');
		$pdf->SetSubject('Invoice');

		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->addPage();

		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		//line ini penting
		$this->response->setContentType('application/pdf');
		//Close and output PDF document
		$pdf->Output('invoice.pdf', 'I');
	}

	public function cetakdetail()
	{
		$data['judul'] = 'Sistem Informasi Pencatatan Keberadaan';
		$data['url'] = 'ormas';
		$data['key'] = 'id_ormas';
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


		$html = view('informasikelola/cetakdetail', $data);

		$pdf = new TCPDF('L', PDF_UNIT, 'F4', true, 'UTF-8', false);

		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Dea Venditama');
		$pdf->SetTitle('Cetak');
		$pdf->SetSubject('Invoice');

		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->addPage();

		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		//line ini penting
		$this->response->setContentType('application/pdf');
		//Close and output PDF document
		$pdf->Output('invoice.pdf', 'I');
	}

	// fungsi untuk ubah data
	public function ubah()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = 'Ubah Informasi Pencatatan Keberadaan';
		$data['url'] = 'informasikelolaskt/ubah';
		$data['key'] = 'id_ormas';
		$data['modelOrmas'] = $this->modelOrmas
			->where('id_ormas', $id_ormas)
			->findAll(1);

		echo view('/informasikelola/ubah', $data);
	}

	public function ubahData()
	{
		$modelOrmas = $this->modelOrmas
			->where('id_ormas', $this->request->getPost('id_ormas'))
			->find()[0];

		$datalama = array(
			'id_ormas' => $modelOrmas['id_ormas'],
			'nama_organisasi' => $modelOrmas['nama_organisasi'],
			'nama_bidang' => $modelOrmas['nama_bidang'],
			'no_akte_pendirian' => $modelOrmas['no_akte_pendirian'],
			'no_sk_kepengurusan' => $modelOrmas['no_sk_kepengurusan'],
			'no_induk' => $modelOrmas['no_induk'],
			'no_keberadaan' => $modelOrmas['no_keberadaan'],
			'nama_ketua' => $modelOrmas['nama_ketua'],
			'nama_sekretaris' => $modelOrmas['nama_sekretaris'],
			'nama_bendahara' => $modelOrmas['nama_bendahara'],
			'berakhirnya' => $modelOrmas['berakhirnya'],
			'alamat' => $modelOrmas['alamat'],
			'tahun' => $modelOrmas['tahun'],
			'email' => $modelOrmas['email'],
			'nomor_hp' => $modelOrmas['nomor_hp'],
			'skt' => $modelOrmas['skt'],
			'sk_keberadaan' => $modelOrmas['sk_keberadaan'],
			'sk_pengurus' => $modelOrmas['sk_pengurus'],
			'domisili' => $modelOrmas['domisili'],
			'ad_art' => $modelOrmas['ad_art'],
			'foto_ketua' => $modelOrmas['foto_ketua'],
			'foto_sekretaris' => $modelOrmas['foto_sekretaris'],
			'foto_bendahara' => $modelOrmas['foto_bendahara'],
			'akte_pendirian' => $modelOrmas['akte_pendirian'],
			'program_kerja' => $modelOrmas['program_kerja'],
			'kartu_ormas' => $modelOrmas['kartu_ormas'],
			'ktp_ketua' => $modelOrmas['ktp_ketua'],
			'ktp_sekretaris' => $modelOrmas['ktp_sekretaris'],
			'ktp_bendahara' => $modelOrmas['ktp_bendahara'],
		);

		$this->modelOrmasRiwayat->save($datalama);

		$data = array(
			'id_ormas' => $this->request->getPost('id_ormas'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_keberadaan' => $this->request->getPost('no_keberadaan'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'berakhirnya' => $this->request->getPost('berakhirnya'),
			'alamat' => $this->request->getPost('alamat'),
			'tahun' => $this->request->getPost('tahun'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
		);

		$fileFields = [
			'skt', 'sk_keberadaan', 'sk_pengurus', 'domisili', 'ad_art',
			'foto_ketua', 'foto_sekretaris', 'foto_bendahara', 'akte_pendirian',
			'program_kerja', 'kartu_ormas', 'ktp_ketua', 'ktp_sekretaris', 'ktp_bendahara'
		];

		foreach ($fileFields as $field) {
			$file = $this->request->getFile($field);
			if ($file && $file->isValid() && !$file->hasMoved()) {
				$filename = $file->getClientName();
				$file->move(ROOTPATH . 'public/upload/', $filename);
				$data[$field] = $filename;
			}
		}

		$this->modelOrmas->save($data);

		return redirect()->to(base_url() . '/informasikelolaskt');
	}

	// fungsi untuk menghapus data
	public function delete()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelOrmas->delete($id);
		return redirect()->to(base_url() . '/informasikelolaskt');
	}

	public function history()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = 'Riwayat Informasi Pencatatan Keberadaan';
		$data['url'] = 'informasikelolaskt/history';
		$data['key'] = 'id_ormas';



		$data['modelOrmasRiwayat'] = $this->modelOrmasRiwayat

			->where('id_ormas', $id_ormas)

			->findAll(1);

		echo view('/informasikelola/history', $data);
	}

	public function historydata()
	{
		$file = $this->request->getFile('skt');
		$filename = time() . $file->getClientName();
		$file->move(ROOTPATH . 'public/upload/', $filename);

		$file1 = $this->request->getFile('sk_keberadaan');
		$filename1 = time() . $file1->getClientName();
		$file1->move(ROOTPATH . 'public/upload/', $filename1);

		$file2 = $this->request->getFile('sk_pengurus');
		$filename2 = time() . $file2->getClientName();
		$file2->move(ROOTPATH . 'public/upload/', $filename2);

		$file4 = $this->request->getFile('domisili');
		$filename4 = time() . $file4->getClientName();
		$file4->move(ROOTPATH . 'public/upload/', $filename4);

		$file5 = $this->request->getFile('ad_art');
		$filename5 = time() . $file5->getClientName();
		$file5->move(ROOTPATH . 'public/upload/', $filename5);

		$file6 = $this->request->getFile('foto_ketua');
		$filename6 = time() . $file6->getClientName();
		$file6->move(ROOTPATH . 'public/upload/', $filename6);

		$file7 = $this->request->getFile('foto_sekretaris');
		$filename7 = time() . $file7->getClientName();
		$file7->move(ROOTPATH . 'public/upload/', $filename7);

		$file8 = $this->request->getFile('foto_bendahara');
		$filename8 = time() . $file8->getClientName();
		$file8->move(ROOTPATH . 'public/upload/', $filename8);


		$file9 = $this->request->getFile('akte_pendirian');
		$filename9 = time() . $file9->getClientName();
		$file9->move(ROOTPATH . 'public/upload/', $filename9);


		$file10 = $this->request->getFile('program_kerja');
		$filename10 = time() . $file10->getClientName();
		$file10->move(ROOTPATH . 'public/upload/', $filename10);


		$file11 = $this->request->getFile('kartu_ormas');
		$filename11 = time() . $file11->getClientName();
		$file11->move(ROOTPATH . 'public/upload/', $filename11);


		$file12 = $this->request->getFile('ktp_ketua');
		$filename12 = time() . $file12->getClientName();
		$file12->move(ROOTPATH . 'public/upload/', $filename12);


		$file13 = $this->request->getFile('ktp_sekretaris');
		$filename13 = time() . $file13->getClientName();
		$file13->move(ROOTPATH . 'public/upload/', $filename13);


		$file14 = $this->request->getFile('ktp_bendahara');
		$filename14 = time() . $file14->getClientName();
		$file14->move(ROOTPATH . 'public/upload/', $filename14);

		$modelOrmas = $this->modelOrmas

			->where('id_ormas',  $this->request->getPost('id_ormas'))
			->find()[0];

		$datalama = array(

			'nama_organisasi' => $modelOrmas['nama_organisasi'],
			'nama_bidang' => $modelOrmas['nama_bidang'],
			'no_akte_pendirian' => $modelOrmas['no_akte_pendirian'],
			'no_sk_kepengurusan' => $modelOrmas['no_sk_kepengurusan'],
			'no_induk' => $modelOrmas['no_induk'],
			'no_keberadaan' => $modelOrmas['no_keberadaan'],
			'nama_ketua' => $modelOrmas['nama_ketua'],
			'nama_sekretaris' => $modelOrmas['nama_sekretaris'],
			'nama_bendahara' => $modelOrmas['nama_bendahara'],
			'berakhirnya' => $modelOrmas['berakhirnya'],
			'alamat' => $modelOrmas['alamat'],
			'tahun' => $modelOrmas['tahun'],
			'email' => $modelOrmas['email'],
			'nomor_hp' => $modelOrmas['nomor_hp'],
			'skt' => $filename,
			'sk_keberadaan' => $filename1,
			'sk_pengurus' => $filename2,
			'domisili' => $filename4,
			'ad_art' => $filename5,
			'foto_ketua' => $filename6,
			'foto_sekretaris' => $filename7,
			'foto_bendahara' => $filename8,
			'akte_pendirian' => $filename9,
			'program_kerja' => $filename10,
			'kartu_ormas' => $filename11,
			'ktp_ketua' => $filename12,
			'ktp_sekretaris' => $filename13,
			'ktp_bendahara' => $filename14,
		);

		$this->modelOrmasRiwayat->save($datalama);



		// ubah
		$data = array(
			'id_ormas' => $this->request->getPost('id_kelola_skt'),
			'nama_organisasi' => $this->request->getPost('nama_organisasi'),
			'nama_bidang' => $this->request->getPost('nama_bidang'),
			'no_akte_pendirian' => $this->request->getPost('no_akte_pendirian'),
			'no_sk_kepengurusan' => $this->request->getPost('no_sk_kepengurusan'),
			'no_induk' => $this->request->getPost('no_induk'),
			'no_keberadaan' => $this->request->getPost('no_keberadaan'),
			'nama_ketua' => $this->request->getPost('nama_ketua'),
			'nama_sekretaris' => $this->request->getPost('nama_sekretaris'),
			'nama_bendahara' => $this->request->getPost('nama_bendahara'),
			'berakhirnya' => $this->request->getPost('berakhirnya'),
			'alamat' => $this->request->getPost('alamat'),
			'tahun' => $this->request->getPost('tahun'),
			'email' => $this->request->getPost('email'),
			'nomor_hp' => $this->request->getPost('nomor_hp'),
			'skt' => $filename,
			'sk_keberadaan' => $filename1,
			'sk_pengurus' => $filename2,
			'domisili' => $filename4,
			'ad_art' => $filename5,
			'foto_ketua' => $filename6,
			'foto_sekretaris' => $filename7,
			'foto_bendahara' => $filename8,
			'akte_pendirian' => $filename9,
			'program_kerja' => $filename10,
			'kartu_ormas' => $filename11,
			'ktp_ketua' => $filename12,
			'ktp_sekretaris' => $filename13,
			'ktp_bendahara' => $filename14,
		);



		$this->modelOrmasRiwayat->save($data);

		// print_r($data);
		// exit;
		// return redirect('kategori');
		return redirect()->to(base_url() . '/informasikelolaskt');
	}

	public function history1()
	{
		$id_ormas = $this->req->uri->getSegment(3);
		$data['id_ormas'] = $id_ormas;
		$data['judul'] = 'Riwayat Data Lama';
		$data['modelOrmasRiwayat'] = $this->modelOrmasRiwayat

			->where('id_ormas', $id_ormas)

			->findAll();

		echo view('/informasikelola/history1', $data);
	}

	public function detailhistory()
	{
		$id_ormas_riwayat = $this->req->uri->getSegment(3);
		$data['id_ormas_riwayat'] = $id_ormas_riwayat;
		$data['judul'] = 'Riwayat Sistem Informasi Pencatatan Keberadaan';


		$data['modelOrmasRiwayat'] = $this->modelOrmasRiwayat

			->where('id_ormas_riwayat', $id_ormas_riwayat)

			->findAll(1);

		echo view('/informasikelola/detailhistory', $data);
	}
}
