<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FaqController extends BaseController
{
    public function index()
    {
        $data['judul'] = '<strong>Frequently Asked Questions</strong>';
        $data['model'] = $this->modelFaq
            ->findAll();

        echo view('/faq/index', $data);
    }

    public function detail()
    {
        $id_faq = $this->req->uri->getSegment(3);
        $data['judul'] = '<strong>Petunjuk Umum</strong>';
        $data['model'] = $this->modelFaq
            ->where('id_faq', $id_faq)
            ->findAll();

        echo view('/faq/detail', $data);
    }

    public function tambah()
    {
        $data['judul'] = '<strong>Tambah</strong>';
        $data['url'] = 'faq/tambah';
        $data['id_faq'] = 'id_faq';

        echo view('/faq/tambah', $data);
    }

    public function insertData()
    {
        $file = $this->request->getFile('gambar');
        $filename = time() . $file->getClientName();
        $file->move(ROOTPATH . 'public/upload/', $filename);

        $file1 = $this->request->getFile('gambar1');
        $filename1 = ''; // Inisialisasi variabel

        // Periksa apakah file telah diunggah
        if ($file1 && $file1->isValid()) {
            $filename1 = time() . $file1->getClientName();
            $file1->move(ROOTPATH . 'public/upload/', $filename1);
            // Proses file yang diunggah
        } else {
            // Tangani kasus di mana file tidak diunggah
            // Misalnya, beri nilai default ke $filename1 atau jalankan tindakan alternatif
        }

        $file2 = $this->request->getFile('gambar2');
        $filename2 = '';

        if ($file2 && $file2->isValid()) {
            $filename2 = time() . $file2->getClientName();
            $file2->move(ROOTPATH . 'public/upload/', $filename2);
        } else {
        }

        $file3 = $this->request->getFile('gambar3');
        $filename3 = '';

        if ($file3 && $file3->isValid()) {
            $filename3 = time() . $file3->getClientName();
            $file3->move(ROOTPATH . 'public/upload/', $filename3);
        } else {
        }

        $file4 = $this->request->getFile('gambar4');
        $filename4 = '';

        if ($file4 && $file4->isValid()) {
            $filename4 = time() . $file4->getClientName();
            $file4->move(ROOTPATH . 'public/upload/', $filename4);
        } else {
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'keterangan' => $this->request->getPost('keterangan'),
            'detail' => $this->request->getPost('detail'),
            'detail1' => $this->request->getPost('detail1'),
            'detail2' => $this->request->getPost('detail2'),
            'detail3' => $this->request->getPost('detail3'),
            'detail4' => $this->request->getPost('detail4'),
            'gambar' => $filename,
            'gambar1' => $filename1,
            'gambar2' => $filename2,
            'gambar3' => $filename3,
            'gambar4' => $filename4,
        ];

        $this->modelFaq->save($data);
        // print_r($data);
        // exit();
        return redirect()->to(base_url() . '/faq');
    }

    public function ubah()
    {
        $id_faq = $this->req->uri->getSegment(3);
        $data['judul'] = '<strong>Ubah FAQ</strong>';
        $data['url'] = 'faq/ubah';
        $data['id_faq'] = $id_faq;
        $data['modelFaq'] = $this->modelFaq
            ->where('id_faq', $id_faq)
            ->findAll(1);


        echo view('faq/ubah', $data);
    }

    public function ubahData()
    {
        // Mendapatkan ID FAQ
        $id_faq = $this->request->getPost('id_faq');


        // Data untuk diupdate
        $data = [
            'judul' => $this->request->getPost('judul'),
            'keterangan' => $this->request->getPost('keterangan'),
            'detail' => $this->request->getPost('detail'),
            'detail1' => $this->request->getPost('detail1'),
            'detail2' => $this->request->getPost('detail2'),
            'detail3' => $this->request->getPost('detail3'),
            'detail4' => $this->request->getPost('detail4'),
        ];

        $fileFields = [
            'gambar', 'gambar1', 'gambar2', 'gambar3', 'gambar4'

        ];

        foreach ($fileFields as $field) {
            $file = $this->request->getFile($field);
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $filename = $file->getClientName();
                $file->move(ROOTPATH . 'public/upload/', $filename);
                $data[$field] = $filename;
            }
        }
        // Update data ke database
        $this->modelFaq->update($id_faq, $data);

        return redirect()->to(base_url() . '/faq');
    }

    public function delete()
    {
        $id = $this->req->uri->getSegment(3);
        $this->modelFaq->delete($id);
        return redirect()->to(base_url() . '/faq');
    }
}
