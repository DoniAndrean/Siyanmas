<?php
namespace App\Controllers;

use CodeIgniter\Controller;
class SomeController extends BaseController 
{
    public function someFunction() {
        $this->load->model('UserModel');
        
        $id_user = $this->session->userdata('id_user'); // Asumsikan id_user disimpan dalam sesi
        $user = $this->UserModel->getUserById($id_user);
        
        $data['user'] = $user;
        
        $this->load->view('layout/main', $data);
    }
}