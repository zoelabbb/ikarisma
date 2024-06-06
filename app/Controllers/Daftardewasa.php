<?php

namespace App\Controllers;

use App\Models\DewasaModel;

class Daftardewasa extends BaseController
{
    function __construct()
    {
        $this->DewasaModel = new DewasaModel();
    }
    public function daftardewasa()
    {
        return view('pages/dewasa');
    }
    public function save()
    {
        $this->DewasaModel->save([
            'nama' => $this->request->getVar('nama'),
            'nama_panggilan' => $this->request->getVar('nama_panggilan'),
            'jenis' => $this->request->getVar('jenis'),
            'ukuran' => $this->request->getVar('ukuran')
        ]);
    }
}
