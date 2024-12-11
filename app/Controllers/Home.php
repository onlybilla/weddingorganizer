<?php

namespace App\Controllers;

use App\Models\MinMaxModel;
use App\Models\NormalisasiModel;
use App\Models\PreferensiModel;



class Home extends BaseController
{
    public function index()
    {
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('home');
        echo view('Admin_footer');
    }
    public function callviewhitung()
{
    $mb = new MinMaxModel();
    $datamb = $mb->tampilMinMax();
    $data = array('dataMb' => $datamb);

    echo View('admin_header');
    echo View('admin_nav');
    echo View('ViewMinMax', $data);
    echo View('admin_footer');
}

    
public function callviewnormalisasi()
{
    $mb = new NormalisasiModel();
    $datamb = $mb->tampilNormalisasi();

    $data = array('dataMb' => $datamb);

    echo View('admin_header');
    echo View('admin_nav');
    echo View('ViewNormalisasi', $data);
    echo View('admin_footer');
}


public function callviewranking()
{
    $model = new PreferensiModel();
    $data['preferensi'] = $model->hitungPreferensi();

    echo View('admin_header');
    echo View('admin_nav');
    echo View('ViewPreferensi', $data); 
    echo View('admin_footer');
}
    
}
