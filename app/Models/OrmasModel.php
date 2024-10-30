<?php

namespace App\Models;

use CodeIgniter\Model;

class OrmasModel extends Model
{
    protected $table = 'ormas';
    protected $primaryKey = 'id_ormas';
    public function getOrganisasiByIdUser($id_user)
    {
        return $this->where('id_user', $id_user)->first();
    }

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_ormas', 'id_user', 'nama_organisasi', 'nama_bidang', 'no_skt', 'alamat', 'tanggal', 'tahun', 'email', 'nomor_hp', 'skt', 'sk_keberadaan', 'sk_pengurus', 'program_kerja', 'domisili', 'ad_art', 'foto_ketua', 'foto_sekretaris', 'foto_bendahara', 'tanggal_buat', 'surat_permohonan_skt', 'salinan_akte_pendirian', 'program_kerja_organisasi', 'susunan_pengurus', 'surat_pernyataan_kesanggupan', 'surat_pernyataan', 'formulir_isian', 'surat_rekomendasi', 'surat_pernyataan_kesediaan', 'no_induk', 'no_keberadaan', 'berakhirnya', 'kartu_ormas', 'ktp_ketua', 'ktp_sekretaris', 'ktp_bendahara', 'no_akte_pendirian', 'no_sk_kepengurusan', 'status', 'tracking', 'proses', 'alur_proses',  'nama_ketua', 'nama_sekretaris', 'nama_bendahara', 'akte_pendirian', 'surat', 'surat1', 'nama_mahasiswa', 'npm', ''];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
