<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'data_kriteria'; // Sesuai nama tabel
    protected $primaryKey = 'id_kriteria'; // Primary key tabel
    protected $allowedFields = ['id_kriteria', 'nama_kriteria', 'keterangan']; // Tambahkan 'id_kriteria' sebagai allowedFields

    // Get all kriteria data or specific kriteria by ID
    public function getKriteria($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}
