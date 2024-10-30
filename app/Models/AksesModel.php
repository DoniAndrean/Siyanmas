<?php

namespace App\Models;

use CodeIgniter\Model;

class AksesModel extends Model
{
    protected $table = 'akses';
    protected $primaryKey = 'id_akses';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_user', 'nama_organisasi', 'fitur', 'tanggal_mulai', 'tanggal_selesai', 'status'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
