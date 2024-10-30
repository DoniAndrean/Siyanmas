<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DaftarController extends BaseController
{
    protected $modelUser;

    public function __construct()
    {
        // Inisialisasi model
        $this->modelUser = new \App\Models\UserModel();  // Pastikan UserModel sesuai dengan nama model yang Anda gunakan
    }

    public function index()
    {
        $data['user'] = $this->modelUser->findAll();

        echo view('daftar', $data);
    }

    public function login_daftar()
    {
        $data['judul'] = 'Form Login';
        echo view('login_daftar', $data);
    }

    public function submit_daftar()
    {
        $user = $this->modelUser->where('username', $this->request->getPost('username'))->first();

        if (is_null($user) || !password_verify($this->request->getPost('password'), $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Password yang Anda Masukkan Salah');
        }

        session()->set('isLoggedIn', true);

        // Simpan data user ke session termasuk foto
        session()->set('userData', [
            'id_user'       => $user["id_user"],
            'username'      => $user["username"],
            'nama_user'     => $user["nama_user"],
            'status_user'   => $user["status_user"],
            'level_user'    => $user["level_user"],
            'foto'          => $user["foto"]
        ]);
        return redirect()->to(base_url() . '/dashboard');
    }

    public function insertData()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'nama_user' => $this->request->getPost('nama_user'),
            'password' => $this->request->getPost('password'),
            'level_user' => 'pendaftar',
        ];

        $this->modelUser->save($data);

        return redirect()->to(base_url() . '/login_daftar');
    }
}
