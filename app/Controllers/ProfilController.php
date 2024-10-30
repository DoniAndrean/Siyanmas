<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProfilController extends BaseController
{
    public function ubah()
    {
        $id_user = $this->req->uri->getSegment(3);
        $data['judul'] = '<strong>Edit Profil</strong>';
        $data['url'] = 'profil/ubah';
        $data['id_user'] = $id_user;
        $data['model'] = $this->modelUser
            ->where('id_user', $id_user)
            ->findAll(1);

        echo view('profil/ubah', $data);
    }

    public function updateData()
    {
        $file = $this->request->getFile('foto');
        $filename = time() . $file->getClientName();
        $file->move(ROOTPATH . 'public/upload/', $filename);

        $password = $this->request->getPost('password');
        $password2 = $this->request->getPost('password2');

        if ($password != $password2) {
            return redirect()->back()->withInput()->with('error', 'Konfirmasi password baru salah.');
        }

        $data = [
            'id_user' => $this->request->getPost('id_user'),
            'username' => $this->request->getPost('username'),
            'nama_user' => $this->request->getPost('nama_user'),
            'level_user' => $this->request->getPost('level_user'),
            'foto' => $filename,
            'password' => $password,
            'password2' => $password2,
        ];

        $this->modelUser->save($data);

        return redirect()->to(base_url() . '/dashboard');
    }
}