<?php

namespace App\Models;

use CodeIgniter\Model;

class Penghuni extends Model
{
    protected $table = 'penghuni';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama','unit','no_ktp','foto'];
    public function getPenghuni($id = false)
    {
        if($id === false) {
            return $this->findAll();
        }else{
        return $this->where(['id' => $id]);
        }
    }
    
}