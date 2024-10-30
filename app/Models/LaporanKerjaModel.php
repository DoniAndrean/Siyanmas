<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanKerjaModel extends Model
{
    protected $table = 'laporan_kerja';
    protected $primaryKey = 'id_laporan_kerja';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_user', 'id_ormas', 'nama_organisasi', 'foto', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'judul', 'tanggal', 'keterangan', 'status'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
