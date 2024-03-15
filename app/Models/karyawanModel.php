<?php

namespace App\Models;

use CodeIgniter\Model;

class karyawanModel extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['id', 'nama', 'umur', 'jenis_kelamin', 'olahraga_favorit', 'makanan_favorit'];
}
