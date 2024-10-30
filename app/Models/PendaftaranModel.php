<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran_skt';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_user', 'nama_organisasi', 'nama_bidang', 'no_skt', 'nama_pengurus', 'alamat', 'tanggal', 'email', 'nomor_hp', 'skt', 'sk_keberadaan', 'sk_pengurus', 'program_kerja', 'domisili', 'ad_art', 'foto'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
