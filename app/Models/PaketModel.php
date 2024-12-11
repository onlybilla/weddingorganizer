<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'data_paket'; // Tetap sama
    protected $primaryKey = 'kode_paket'; // Ubah ke 'kode_paket' sesuai database
    protected $allowedFields = ['kode_paket', 'nama_paket']; // Sesuai kolom di database

    // Get all paket data or specific paket by kode_paket
    public function getPaket($kode_paket = null)
    {
        if ($kode_paket === null) {
            return $this->findAll();
        }
        return $this->find($kode_paket);
    }
}
