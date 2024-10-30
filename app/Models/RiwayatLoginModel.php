<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatLoginModel extends Model
{
    protected $table = 'riwayat_login';
    protected $primaryKey = 'id_riwayat_login';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_user', 'alamat', 'lat', 'lon', 'tanggal', 'status'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    
}