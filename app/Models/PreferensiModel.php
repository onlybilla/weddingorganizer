<?php 
namespace App\Models;
use CodeIgniter\Model;

class PreferensiModel extends Model
{
    protected $db;

    function __construct()
    {
        $this->db = db_connect();
    }

    public function hitungPreferensi()
    {
        // Ambil bobot dari setiap kriteria
        $bobotQuery = $this->db->query("SELECT id_kriteria, bobot FROM data_bobot");
        $bobotData = $bobotQuery->getResultArray();
    
        // Ambil hasil normalisasi
        $normalisasiQuery = $this->db->query("
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
        $normalisasiData = $normalisasiQuery->getResultArray();
    
        // Hitung nilai preferensi
        $preferensiResults = [];
        foreach ($normalisasiData as $row) {
            $preferensi = 0;
    
            foreach ($bobotData as $bobot) {
                $kriteria = $bobot['id_kriteria'];
                $bobotValue = $bobot['bobot'];
    
                if (in_array($kriteria, ['C1', 'C2', 'C3', 'C4','C6'])) {
                    // Cost criteria: gunakan nilai minimum
                    $normalisasiValue = min(array_column($normalisasiData, $kriteria)) / $row[$kriteria];
                } else {
                    // Benefit criteria: gunakan nilai maksimum
                    $normalisasiValue = $row[$kriteria] / max(array_column($normalisasiData, $kriteria));
                }
    
                $preferensi += $normalisasiValue * $bobotValue;
    
                // Simpan setiap nilai normalisasi
                $row[$kriteria] = round($normalisasiValue, 3);
            }
    
            // Tambahkan hasil preferensi
            $row['nilai_preferensi'] = round($preferensi, 3);
            $preferensiResults[] = $row;
        }
    
        // Urutkan hasil preferensi berdasarkan nilai_preferensi secara descending
        usort($preferensiResults, function ($a, $b) {
            return $b['nilai_preferensi'] <=> $a['nilai_preferensi'];
        });
    
        // Tambahkan ranking
        foreach ($preferensiResults as $index => &$result) {
            $result['ranking'] = $index + 1;
        }
    
        return $preferensiResults;
    }
    
}
