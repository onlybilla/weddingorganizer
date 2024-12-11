<?php

namespace App\Controllers;

use App\Models\BobotModel;
use App\Models\KriteriaModel;

class Bobot extends BaseController
{
    protected $bobotModel;
    protected $kriteriaModel;

    public function __construct()
    {
        $this->bobotModel = new BobotModel();
        $this->kriteriaModel = new KriteriaModel();
    }

    // Tampilkan semua data bobot
    public function index()
    {
        $data['bobots'] = $this->bobotModel->getBobot(); // Ambil data dengan relasi
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('data_bobot', $data);
        echo view('Admin_footer');
    }

    // Tampilkan form tambah bobot
    public function create()
    {
        $data['kriterias'] = $this->kriteriaModel->findAll(); // Ambil semua kriteria
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('create_bobot', $data);
        echo view('Admin_footer');
    }

    // Simpan data bobot
    public function store()
    {
        $id_kriteria = $this->request->getPost('id_kriteria');
        $bobot = $this->request->getPost('bobot');

        // Validasi apakah id_kriteria ada di tabel data_kriteria
        $kriteria = $this->kriteriaModel->find($id_kriteria);

        if (!$kriteria) {
            return redirect()->back()->with('error', 'ID Kriteria tidak valid!');
        }

        // Simpan data ke tabel data_bobot
        $this->bobotModel->save([
            'id_kriteria' => $id_kriteria,
            'bobot' => $bobot,
        ]);

        return redirect()->to('/bobot');
    }

    // Tampilkan form edit bobot
    public function edit($id)
    {
        $data['bobot'] = $this->bobotModel->getBobot($id); // Data bobot yang akan diedit
        $data['kriterias'] = $this->kriteriaModel->findAll(); // Semua data kriteria untuk dropdown
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('edit_bobot', $data);
        echo view('Admin_footer');
    }

    // Update data bobot
    public function update($id)
    {
        $this->bobotModel->update($id, [
            'id_kriteria' => $this->request->getPost('id_kriteria'),
            'bobot' => $this->request->getPost('bobot')
        ]);

        return redirect()->to('/bobot');
    }

    // Hapus data bobot
    public function delete($id)
    {
        $this->bobotModel->delete($id);
        return redirect()->to('/bobot');
    }
}
