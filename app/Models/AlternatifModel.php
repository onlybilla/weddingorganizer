<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternatifModel extends Model
{
    protected $table = 'konversi_penilaian'; // Nama tabel sesuai database
    protected $primaryKey = 'id_konversi'; // Primary key tabel
    protected $allowedFields = ['id_kriteria', 'kode_paket', 'value']; // Kolom yang dapat diisi

    // Fungsi untuk mendapatkan data langsung dari database
    public function getAlternatif($id = null)
    {
        $builder = $this->db->table($this->table);

        if ($id !== null) {
            $builder->where('id_konversi', $id);
            return $builder->get()->getRowArray();
        }

        return $builder->get()->getResultArray(); // Ambil semua data tanpa perubahan urutan
    }
}
