<?php

namespace App\Controllers;

use App\Models\KriteriaModel;

class Kriteria extends BaseController
{
    protected $kriteriaModel;

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
    }

    // Display all kriteria data
    public function index()
    {
        $data['kriterias'] = $this->kriteriaModel->findAll();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('data_kriteria', $data);
        echo view('Admin_footer');
    }

    // Show create form
    public function create()
    {
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('create_kriteria');
        echo view('Admin_footer');
    }

    // Store new kriteria data
    public function store()
    {
        $this->kriteriaModel->insert([
            'id_kriteria' => $this->request->getPost('id_kriteria'), // Masukkan ID Kriteria secara manual
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'keterangan' => $this->request->getPost('keterangan')
        ]);

        return redirect()->to('/kriteria');
    }

    // Show edit form
    public function edit($id_kriteria)
    {
        $data['kriteria'] = $this->kriteriaModel->find($id_kriteria);
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('edit_kriteria', $data);
        echo view('Admin_footer');
    }

    // Update kriteria data
    public function update($id_kriteria)
    {
        $this->kriteriaModel->update($id_kriteria, [
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'keterangan' => $this->request->getPost('keterangan')
        ]);

        return redirect()->to('/kriteria');
    }

    // Delete kriteria data
    public function delete($id_kriteria)
    {
        $this->kriteriaModel->delete($id_kriteria);
        return redirect()->to('/kriteria');
    }
}
