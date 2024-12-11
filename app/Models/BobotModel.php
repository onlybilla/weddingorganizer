<?php

namespace App\Models;

use CodeIgniter\Model;

class BobotModel extends Model
{
    protected $table = 'data_bobot'; // Nama tabel di database
    protected $primaryKey = 'id_bobot'; // Primary key tabel
    protected $allowedFields = ['id_kriteria', 'bobot']; // Kolom yang dapat diisi

    // Fungsi untuk mengambil data bobot, termasuk informasi kriteria
    public function getBobot($id = null)
    {
        $builder = $this->db->table($this->table);
        $builder->select('data_bobot.*, data_kriteria.nama_kriteria'); // Gabungkan nama_kriteria
        $builder->join('data_kriteria', 'data_bobot.id_kriteria = data_kriteria.id_kriteria'); // Relasi

        if ($id !== null) {
            $builder->where('id_bobot', $id);
            return $builder->get()->getRowArray();
        }
        return $builder->get()->getResultArray();
    }
}
