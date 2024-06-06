<?php

namespace App\Controllers;

use App\Models\DewasaModel;
use App\Models\AnakModel;

class Bayar extends BaseController
{
    protected $DewasaModel;
    function __construct()
    {
        $this->AnakModel = new AnakModel();
        $this->DewasaModel = new DewasaModel();
    }
    public function bayar_dewasa()
    {
        //untuk pencarian data menggunakan method post atau get//

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dewasa = $this->DewasaModel->cari($keyword);
        } else {
            $dewasa = $this->DewasaModel;
        }
        //end//

        //untuk membuat nomor paggination
        $nomor_list = $this->request->getVar('page_dewasa') ? $this->request->getVar('page_dewasa') : 1;
        //end//

        $data = [

            'dewasa' => $dewasa->paginate(3, 'dewasa'),
            'pager' => $this->DewasaModel->pager,
            'nomor_list' => $nomor_list,
            'keyword' => $keyword
        ];
        return view('mimin/bayar_dewasa', $data);
    }
    public function bayar_anak()
    {
        //untuk pencarian data menggunakan method post atau get//
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $anak = $this->AnakModel->cari($keyword);
        } else {
            $anak = $this->AnakModel;
        }
        //end//

        //untuk membuat nomor paggination
        $nomor_list = $this->request->getVar('page_dewasa') ? $this->request->getVar('page_dewasa') : 1;
        //end//

        $data = [

            'dewasa' => $anak->paginate(3, 'dewasa'),
            'pager' => $this->DewasaModel->pager,
            'nomor_list' => $nomor_list,
            'keyword' => $keyword
        ];
        return view('mimin/bayar_anak', $data);
    }
}
