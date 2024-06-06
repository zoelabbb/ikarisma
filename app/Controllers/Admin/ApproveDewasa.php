<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ApproveDewasaModel;
use App\Models\DewasaModel;

class ApproveDewasa extends BaseController
{
    protected $ApproveDewasaModel;
    function __construct()
    {
        $this->ModelDewasa = new ApproveDewasaModel();
        $this->TambahDewasa = new DewasaModel();
    }
    public function Approve_dewasa()
    {

        $approve_dewasa = $this->ModelDewasa->findAll();
        $data = [
            'approve_dewasa' => $approve_dewasa,

        ];

        return view('mimin/approve_dewasa', $data);
    }
    public function detail($id_approve)
    {
        return json_encode($this->ModelDewasa->find($id_approve));
    }
    public function saveD()
    {
        $this->TambahDewasa->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nama_panggilan' => $this->request->getVar('nama_panggilan'),
            'id_kaos' => $this->request->getVar('id_kaos'),
            'model' => $this->request->getVar('model'),
            'ukuran' => $this->request->getVar('ukuran')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Di tambahkan');
        return redirect()->to('admin/approve_dewasa');
    }

    public function approveD($id_approve)
    {
        $this->ModelDewasa->delete($id_approve);
        return redirect()->to('admin/approve_dewasa');
    }
}
