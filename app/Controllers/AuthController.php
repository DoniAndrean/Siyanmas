<?php
namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function signup()
    {
        return view('signup');
    }

    public function signupsubmit()
    {
        $userModel = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            // tambahkan field lain yang diperlukan
        ];

        $userModel->save($data);

        return redirect()->to('/dashboard');
    }
}