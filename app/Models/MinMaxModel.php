<?php
namespace App\Models;

use CodeIgniter\Model;

class MinMaxModel extends Model
{
    protected $table = 'konversi_penilaian';
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    // Fungsi untuk menampilkan semua data konversi
    public function tampilKonversi()
    {
        $dataQuery = $this->db->query("SELECT * FROM konversi_penilaian");
        return $dataQuery->getResult();
    }

    // Fungsi untuk menghitung nilai min dan max berdasarkan kriteria
    public function tampilMinMax()
    {
        $dataQuery = $this->db->query("
            SELECT 
                MIN(CASE WHEN id_kriteria = 'C1' THEN value END) AS minK1,
                MIN(CASE WHEN id_kriteria = 'C2' THEN value END) AS minK2,
                MIN(CASE WHEN id_kriteria = 'C3' THEN value END) AS minK3,
                MIN(CASE WHEN id_kriteria = 'C4' THEN value END) AS minK4,
                MAX(CASE WHEN id_kriteria = 'C5' THEN value END) AS maxK5,
                MIN(CASE WHEN id_kriteria = 'C6' THEN value END) AS minK6
            FROM konversi_penilaian
        ");
        return $dataQuery->getRow();
    }
}
