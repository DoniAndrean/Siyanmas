<?php

namespace App\Controllers;

use TCPDF;
use CodeIgniter\Controller;

class KelolaController extends BaseController
{
    public function skt()
    {
        $data['judul'] = '<strong>Surat Keterangan Terdaftar (SKT) Organisasi Kemasyarakatan</strong>';
        $data['url'] = 'kelola/skt';
        $data['key'] = 'id_ormas';
        $data['model'] = $this->modelOrmas
            // ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
            // ->orderBy('no')
            ->findAll();
        echo view('/kelola/skt', $data);
    }

    public function insertsktData()
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

        $data = array(
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


        $this->modelOrmas->save($data);

        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url() . '/informasikelolaskt');
    }

    public function skhu()
    {
        $data['judul'] = '<strong>Pencatatan Keberadaan Organisasi Kemasyarakatan</strong>';
        $data['url'] = 'kelola/skhu';
        $data['key'] = 'id_ormas';
        $data['model'] = $this->modelOrmas
            // ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
            // ->orderBy('no')
            ->findAll();

        echo view('/kelola/skhu', $data);
    }

    public function insertskhuData()
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

        $data = array(
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


        $this->modelOrmas->save($data);

        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url() . '/informasikelolaskt');
    }
}
