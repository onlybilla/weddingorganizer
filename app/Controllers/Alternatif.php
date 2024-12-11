<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\PaketModel;
use App\Models\KriteriaModel;

class Alternatif extends BaseController
{
    protected $alternatifModel;
    protected $paketModel;
    protected $kriteriaModel;

    public function __construct()
    {
        $this->alternatifModel = new AlternatifModel();
        $this->paketModel = new PaketModel();
        $this->kriteriaModel = new KriteriaModel();
    }

    // Tampilkan semua data alternatif
    public function index()
    {
        $data['alternatifs'] = $this->alternatifModel->getAlternatif();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('data_alternatif', $data);
        echo view('Admin_footer');
    }

    // Tampilkan form tambah alternatif
    public function create()
    {
        $data['pakets'] = $this->paketModel->findAll(); // Ambil semua paket
        $data['kriterias'] = $this->kriteriaModel->findAll(); // Ambil semua kriteria
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('create_alternatif', $data);
        echo view('Admin_footer');
    }

    // Simpan data alternatif
    public function store()
    {
        $this->alternatifModel->save([
            'id_kriteria' => $this->request->getPost('id_kriteria'),
            'kode_paket' => $this->request->getPost('kode_paket'),
            'value' => $this->request->getPost('value')
        ]);

        return redirect()->to('/alternatif');
    }

    // Tampilkan form edit alternatif
    public function edit($id)
    {
        $data['alternatif'] = $this->alternatifModel->getAlternatif($id);
        $data['pakets'] = $this->paketModel->findAll(); // Semua paket untuk dropdown
        $data['kriterias'] = $this->kriteriaModel->findAll(); // Semua kriteria untuk dropdown
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('edit_alternatif', $data);
        echo view('Admin_footer');
    }

    // Update data alternatif
    public function update($id)
    {
        $this->alternatifModel->update($id, [
            'id_kriteria' => $this->request->getPost('id_kriteria'),
            'kode_paket' => $this->request->getPost('kode_paket'),
            'value' => $this->request->getPost('value')
        ]);

        return redirect()->to('/alternatif');
    }

    // Hapus data alternatif
    public function delete($id)
    {
        $this->alternatifModel->delete($id);
        return redirect()->to('/alternatif');
    }
}
