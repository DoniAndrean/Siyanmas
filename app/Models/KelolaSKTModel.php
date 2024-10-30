<?php

namespace App\Models;

use CodeIgniter\Model;

class KelolaSKTModel extends Model
{
    protected $table = 'kelola_skt';
    protected $primaryKey = 'id_kelola_skt';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_user', 'nama_organisasi', 'nama_bidang', 'no_akte_pendirian', 'no_sk_kepengurusan', 'no_induk', 'no_keberadaan', 'ketua', 'sekretaris', 'bendahara', 'berakhirnya', 'alamat', 'tahun', 'email', 'nomor_hp', 'skt', 'sk_keberadaan', 'sk_pengurus', 'domisili', 'ad_art', 'foto_ketua', 'foto_sekretaris', 'foto_bendahara', 'akte_pendirian', 'program_kerja', 'kartu_ormas', 'ktp'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
