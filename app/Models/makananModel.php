<?php

namespace App\Models;

use CodeIgniter\Model;

class makananModel extends Model
{
    protected $table = 'makanan';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['id', 'jenis_makanan'];
}
