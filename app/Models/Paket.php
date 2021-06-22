<?php

namespace App\Models;

use CodeIgniter\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['tanggal','isipaket','tanggal_diterima','nama_karyawan','nip','penghuni','status'];
    public function getPaket($id = false)
    {
        if($id === false) {
            return $this->findAll();
        }else{
        return $this->where(['id' => $id]);
        }
    }
    
}