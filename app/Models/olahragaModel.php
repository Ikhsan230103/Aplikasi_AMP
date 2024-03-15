<?php

namespace App\Models;

use CodeIgniter\Model;

class olahragaModel extends Model
{
    protected $table = 'olahraga';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['id', 'jenis_olahraga'];
}
