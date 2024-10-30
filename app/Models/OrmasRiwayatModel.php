<?php

namespace App\Models;

use CodeIgniter\Model;

class OrmasRiwayatModel extends Model
{
    protected $table = 'ormas_riwayat';
    protected $primaryKey = 'id_ormas_riwayat';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_ormas', 'nama_organisasi', 'nama_bidang', 'no_akte_pendirian', 'no_sk_kepengurusan', 'no_induk', 'no_keberadaan', 'nama_ketua', 'nama_sekretaris', 'nama_bendahara', 'berakhirnya', 'alamat', 'tahun', 'email', 'nomor_hp', 'skt', 'sk_keberadaan', 'sk_pengurus', 'domisili', 'ad_art', 'foto_ketua', 'foto_sekretaris', 'foto_bendahara', 'akte_pendirian', 'program_kerja', 'kartu_ormas', 'ktp_ketua', 'ktp_sekretaris', 'ktp_bendahara'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
