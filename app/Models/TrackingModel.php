<?php

namespace App\Models;

use CodeIgniter\Model;

class TrackingModel extends Model
{
    protected $table = 'tracking';
    protected $primaryKey = 'id_tracking';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_tracking', 'surat', 'tanggal', 'keterangan', 'jenis'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
