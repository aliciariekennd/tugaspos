<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama','nip'];
}