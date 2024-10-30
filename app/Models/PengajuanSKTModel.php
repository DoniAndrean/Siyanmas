<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanSKTModel extends Model
{
    protected $table = 'pengajuan_skt';
    protected $primaryKey = 'id_pengajuan_skt';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_user', 'id_tracking', 'nama_organisasi', 'alamat', 'tanggal_buat', 'email', 'nomor_hp', 'surat_permohonan_skt', 'salinan_akte_pendirian', 'program_kerja_organisasi', 'susunan_pengurus', 'domisili', 'surat_pernyataan_kesanggupan', 'formulir_isian', 'surat_pernyataan', 'surat_rekomendasi', 'surat_pernyataan_kesediaan'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
