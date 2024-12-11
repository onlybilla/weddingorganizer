<?php 
namespace App\Models;

use CodeIgniter\Model;

class NormalisasiModel extends Model
{
    protected $table = 'konversi_penilaian';
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function tampilNormalisasi()
    {
        // Ambil nilai min dan max untuk setiap kriteria
        $maxMinQuery = $this->db->query("
            SELECT 
                MIN(CASE WHEN id_kriteria = 'C1' THEN value END) AS minK1,
                MIN(CASE WHEN id_kriteria = 'C2' THEN value END) AS minK2,
                MIN(CASE WHEN id_kriteria = 'C3' THEN value END) AS minK3,
                MIN(CASE WHEN id_kriteria = 'C4' THEN value END) AS minK4,
                MAX(CASE WHEN id_kriteria = 'C5' THEN value END) AS maxK5,
                MIN(CASE WHEN id_kriteria = 'C6' THEN value END) AS minK6
            FROM konversi_penilaian
        ");
        $maxMinResults = $maxMinQuery->getRow();
    
        // Ambil data alternatif dan group berdasarkan kode paket
        $allDataQuery = $this->db->query("
            SELECT 
                kode_paket,
                MAX(CASE WHEN id_kriteria = 'C1' THEN value END) AS C1,
                MAX(CASE WHEN id_kriteria = 'C2' THEN value END) AS C2,
                MAX(CASE WHEN id_kriteria = 'C3' THEN value END) AS C3,
                MAX(CASE WHEN id_kriteria = 'C4' THEN value END) AS C4,
                MAX(CASE WHEN id_kriteria = 'C5' THEN value END) AS C5,
                MAX(CASE WHEN id_kriteria = 'C6' THEN value END) AS C6
            FROM konversi_penilaian
            GROUP BY kode_paket
        ");
        $allDataResults = $allDataQuery->getResult();
    
        return ['maxmin' => $maxMinResults, 'all' => $allDataResults];
    }
    
}
