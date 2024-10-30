<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends BaseController
{
    protected $modelUser;
    protected $modelRiwayatLogin;
    protected $modelNotifikasi;
    protected $modelOrmas;

    public function __construct()
    {
        $this->modelUser = new \App\Models\UserModel();
        $this->modelRiwayatLogin = new \App\Models\RiwayatLoginModel();
        $this->modelNotifikasi = new \App\Models\NotifikasiModel();
        $this->modelOrmas = new \App\Models\OrmasModel();
    }

    public function index()
    {
        $data['judul'] = 'Form Login';
        return view('login', $data);
    }

    public function submit()
    {
        $user = $this->modelUser->where('username', $this->request->getPost('username'))->first();

        if (is_null($user) || !password_verify($this->request->getPost('password'), $user['password_hash'])) {
            return redirect()->back()->withInput()->with('error', 'Password yang Anda Masukkan Salah');
        }

        // Set data session
        $sessionData = [
            'isLoggedIn' => true,
            'userData' => [
                'id_user' => $user["id_user"],
                'username' => $user["username"],
                'nama_user' => $user["nama_user"],
                'status_user' => $user["status_user"],
                'level_user' => $user["level_user"],
                'foto' => $user["foto"]
            ]
        ];
        session()->set($sessionData);

        // Simpan data riwayat login
        $dataRiwayat = [
            'id_user' => $user["id_user"],
            'alamat' => $this->request->getPost('alamat'),
            'lat' => $this->request->getPost('lat'),
            'lon' => $this->request->getPost('lon'),
            'tanggal' => date('Y-m-d H:i:s'),
            'status' => 'Login',
        ];
        $this->modelRiwayatLogin->save($dataRiwayat);

        // Simpan data notifikasi
        $dataNotifikasi = [
            'id_user' => $user["id_user"],
            'tanggal' => date('Y-m-d H:i:s'),
            'aktifitas' => 'Login',
        ];
        $this->modelNotifikasi->save($dataNotifikasi);

        return redirect()->to(base_url('/dashboard'));
    }

    public function logout()
    {
        $id_user = session('userData')['id_user'];
        $alamat = $this->request->uri->getSegment(3);
        $alamat = str_replace('%20', ' ', $alamat);
        $lat = $this->request->uri->getSegment(4);
        $lon = $this->request->uri->getSegment(5);

        // Simpan data riwayat logout
        $data = [
            'id_user' => $id_user,
            'alamat' => $alamat,
            'lat' => $lat,
            'lon' => $lon,
            'tanggal' => date('Y-m-d H:i:s'),
            'status' => 'Logout',
        ];
        $this->modelRiwayatLogin->save($data);

        session()->destroy();
        return redirect()->to(base_url());
    }

    public function forgot()
    {
        $data['judul'] = 'Form Password';
        return view('forgot', $data);
    }

    public function forgotsubmit()
    {
        // Ambil data dari form
        $nama_organisasi = $this->request->getPost('nama_organisasi');
        $no_induk = $this->request->getPost('no_induk');

        // Query untuk mencari pengguna berdasarkan nama_organisasi dan no_induk
        $user = $this->modelOrmas
            ->where('nama_organisasi', $nama_organisasi)
            ->where('no_induk', $no_induk)
            ->first();

        // Jika pengguna ditemukan
        if ($user) {
            // Ambil id_user dari hasil query
            $id_user = $user['id_user'];

            // Atur sesi untuk pengguna yang telah login
            $session = session();
            $session->set('is_logged_in', true); // Tambahkan session ini untuk menandakan pengguna sudah login

            // Redirect ke halaman dashboard atau halaman yang sesuai
            return redirect()->to('/dashboard'); // Ganti '/dashboard' dengan halaman yang sesuai

        } else {
            // Jika pengguna tidak ditemukan, redirect kembali dengan pesan error
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function newpassword()
    {
        $user = $this->modelOrmas
            ->where('nama_organisasi', $this->request->getPost('nama_organisasi'))
            ->where('no_induk', $this->request->getPost('no_induk'))
            ->first();

        if (isset($user)) {
            $data = [
                'password' => $this->request->getPost('password'),
                'passwordconfirm' => $this->request->getPost('passwordconfirm'),
            ];

            if ($data['password'] == $data['passwordconfirm']) {
                $databaru = [
                    'id_user' => $user['id_user'],
                    'password' => password_hash($data['password'], PASSWORD_BCRYPT),
                ];
                $this->modelUser->save($databaru);
                return redirect()->to(base_url('/login'))->with('success', 'Password berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Password konfirmasi tidak cocok');
            }
        } else {
            return redirect()->back()->with('error', 'Tidak Ada Data');
        }
    }
}
