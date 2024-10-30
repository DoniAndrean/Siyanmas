<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class RiwayatLoginController extends BaseController
{
	public function index()
	{
		$data['judul'] = '<strong>Riwayat Login</strong>';
		$data['model'] = $this->modelRiwayatLogin
		->join('user', 'user.id_user=riwayat_login.id_user', 'left')
		->findAll();

		echo view('/riwayatlogin/index', $data); 
	}
}
