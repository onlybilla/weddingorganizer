<?php

namespace App\Controllers;

use App\Models\PaketModel;

class paket extends BaseController
{
    protected $paketModel;

    public function __construct()
    {
        $this->paketModel = new PaketModel();
    }

    // Display all restoran data
    public function index()
    {
        $data['pakets'] = $this->paketModel->getPaket();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('data_paket', $data); // Sesuaikan jalur view
        echo view('Admin_footer');
    }

    // Show create form
    public function create()
    {
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('create_paket'); // Sesuaikan jalur view
        echo view('Admin_footer');
    }

    // Store new restoran data
    public function store()
    {
        // Ambil data dari form
        $data = [
            'kode_paket' => $this->request->getPost('kode_paket'),
            'nama_paket' => $this->request->getPost('nama_paket'),
        ];
    
        // Simpan data langsung ke model
        $this->paketModel->insert($data);
    
        // Redirect ke halaman paket
        return redirect()->to('/paket');
    }
    

    // Show edit form
  // Edit method
public function edit($kode_paket)
{
    $data['paket'] = $this->paketModel->getPaket($kode_paket);
    echo view('Admin_header');
    echo view('Admin_nav');
    echo view('edit_paket', $data); // Sesuaikan jalur view
    echo view('Admin_footer');
}

// Update method
public function update($kode_paket)
{
    $this->paketModel->update($kode_paket, [
        'kode_paket' => $this->request->getPost('kode_paket'),
        'nama_paket' => $this->request->getPost('nama_paket')
    ]);

    return redirect()->to('/paket');
}

// Delete method
public function delete($kode_paket)
{
    $this->paketModel->delete($kode_paket);
    return redirect()->to('/paket');
}
}