<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\AnakModel;


class Kaos_anak extends BaseController
{

    public function __construct()
    {
        $this->DetailAnak = new TransaksiModel();
        $this->AnakModel = new AnakModel();
    }
    public function kaos_anak()
    { //untuk pencarian data menggunakan method post atau get//
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $anak = $this->AnakModel->cari($keyword);
        } else {
            $anak = $this->AnakModel;
        }
        //end//

        $nomor_list = $this->request->getVar('page_anak') ? $this->request->getVar('page_anak') : 1;


        $data = [

            'anak' => $anak->paginate(10, 'anak'),
            'pager' => $this->AnakModel->pager,
            'nomor_list' => $nomor_list,
            'keyword' => $keyword
        ];
        return view('pages/kaos_anak', $data);
    }
    public function detailA($id_anak)
    {
        $detailanak = $this->DetailAnak->Rinci_kaos_anak($id_anak);
        $data = [

            'detailanak' => $detailanak
        ];
        return view('pages/detail_a', $data);
    }
}
