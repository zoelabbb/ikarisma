<?php

namespace App\Controllers;

use App\Models\AnakModel;

class DaftarAnak extends BaseController
{
    function __construct()
    {
        $this->AnakModel = new AnakModel();
    }
    public function daftaranak()
    {
        return view('pages/anak');
    }
    public function save()
    {
        $this->AnakModel->save([
            'nama_anak' => $this->request->getVar('nama_anak'),
            'nama_panggilan' => $this->request->getVar('nama_panggilan'),
            'ukuran' => $this->request->getVar('ukuran'),
            'jenis' => $this->request->getVar('jenis')
        ]);
    }
}
