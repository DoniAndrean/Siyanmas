<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class UserController extends BaseController
{
	public function index()
	{
		$data['judul'] = '<strong>User</strong>';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
			$level = $_GET['level_user'];
		} else {
			$query = '';
			$level = '';
		}

		$data['User'] = $this->modelUser

			->like('nama_user', $query, 'both')
			->like('level_user', $level, 'both')
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

		echo view('/user/index', $data);
	}

	public function tambah()
	{
		$id_user = 0;
		$data['judul'] = '<strong>Tambah User</strong>';
		$data['url'] = 'user/tambah';
		$data['id_user'] = 'id_user';

		echo view('/user/_form', $data);
	}

	public function insertData()
	{
		// $file = $this->request->getFile('foto');
        // $filename = time() . $file->getClientName();
        // $file->move(ROOTPATH . 'public/upload/', $filename);

		$data = [
			'username' => $this->request->getPost('username'),
			'nama_user' => $this->request->getPost('nama_user'),
			'password' => $this->request->getPost('password'),
            // 'foto' => $filename,
			'level_user' => $this->request->getPost('level_user'),
			'status_user' => '1',
		];

		$this->modelUser->save($data);
		// print_r($data);
		// exit();


		return redirect()->to(base_url() . '/user');
	}

	public function logout()
	{
		$id_user = session('userData')['id'];
		$alamat = $this->req->uri->getSegment(2);
		$alamat = str_replace('%20', ' ', $alamat);
		$lat = $this->req->uri->getSegment(3);
		$lon = $this->req->uri->getSegment(4);

		$data =
			[
				'id_user' => $id_user,
				'alamat' => $alamat,
				'lat' => $lat,
				'lon' => $lon,
				'tanggal' => date('Y-m-d H:i:s'),
				'status' => 'Logout',
			];
		$this->modelRiwayatLogin->save($data);

		$this->session->set('userData', array('username', 'level_user'));

		return redirect()->to(base_url());
	}

	public function logoutUser()
	{
		$this->session->destroy();
		return redirect()->to(base_url());
	}

	public function ubah()
	{
		$id_user = $this->req->uri->getSegment(3);
		$data['judul'] = 'Edit User';
		$data['url'] = 'user/ubah';
		$data['id_user'] = $id_user;
		$data['model'] = $this->modelUser
			->where('id_user', $id_user)
			->findAll(1);


		echo view('user/_form', $data);
	}

	public function updateData()
	{
		// $file = $this->request->getFile('foto');
		// $filename = time() . $file->getClientName();
		// $file->move(ROOTPATH . 'public/upload/', $filename);

		$data = [
			'id_user' => $this->request->getPost('id_user'),
			'username' => $this->request->getPost('username'),
			'nama_user' => $this->request->getPost('nama_user'),
			// 'foto' => $filename,
			'password' => $this->request->getPost('password'),
			'password2' => $this->request->getPost('password2'),
			'level_user' => $this->request->getPost('level_user'),

		];

		$this->modelUser->save($data);

		return redirect()->to(base_url() . '/user');
	}

	public function delete()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelUser->delete($id);
		return redirect()->to(base_url() . '/user');
	}

	public function akses()
	{
		$id = $this->req->uri->getSegment(3);
		$tanggal = $this->req->uri->getSegment(4);
		$data = array(
			'id_user' => $id,
			'tanggal_akses' => $tanggal
		);
		// print_r($data);exit;
		$this->modelUser->save($data);
		return redirect()->to(base_url() . '/user');
	}
	
}
