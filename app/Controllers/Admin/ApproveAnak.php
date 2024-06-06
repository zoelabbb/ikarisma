<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ApproveAnakModel;
use App\Models\AnakModel;

class ApproveAnak extends BaseController
{
    function __construct()
    {

        $this->ModelAnak = new ApproveAnakModel();
        $this->TambahAnak = new AnakModel();
    }
    public function Approve_anak()
    {
        $approve_anak = $this->ModelAnak->findAll();
        $data = [
            'approve_anak' => $approve_anak
        ];

        return view('mimin/approve_anak', $data);
    }
    public function detailA($id_approve)
    {
        return json_encode($this->ModelAnak->find($id_approve));
    }
    public function savea()
    {
        $this->TambahAnak->save([
            'nama_anak' => $this->request->getVar('nama_anak'),
            'nama_panggilan' => $this->request->getVar('nama_panggilan'),
            'jenis' => $this->request->getVar('jenis'),
            'ukuran' => $this->request->getVar('ukuran')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Di tambahkan');
        return redirect()->to('admin/approve_anak');
    }
    public function approveA($id_approve)
    {
        $this->ModelAnak->delete($id_approve);
        session()->setFlashdata('pesan', 'Data Berhasil Di approve');
        return redirect()->to('admin/approve_anak');
    }
}
