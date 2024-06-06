<?php

namespace App\Controllers;


use App\Models\DewasaModel;
use App\Models\TransaksiModel;

class Kaos extends BaseController
{

    public function __construct()
    {
        $this->DetailDewasa = new TransaksiModel();
        $this->DewasaModel = new DewasaModel();
    }
    public function kaos()
    {
        //untuk membuat nomor paggination
        $nomor_list = $this->request->getVar('page_dewasa') ? $this->request->getVar('page_dewasa') : 1;
        //end//
        $keyword = $this->request->getGet('keyword');
        $data = $this->DewasaModel->getCari(10, $keyword);
        $data['nomor_list'] = $nomor_list;
        $data['keyword'] = $keyword;

        return view('pages/kaos', $data);
    }
    // public function Sum($id_dewasa)
    // {
    //     $dewasa = $this->DewasaModel->getKaos($id_dewasa);
    //     $data = [

    //         'detaildewasa' => $dewasa
    //     ];
    //     return view('pages/kaos', $data);
    // }
    public function detailD($id_dewasa)
    {
        $detaildewasa = $this->DetailDewasa->Rinci_kaos_dewasa($id_dewasa);
        $data = [

            'detaildewasa' => $detaildewasa
        ];
        return view('pages/detail_d', $data);
    }

    public function filter($id_dewasa)
    {
        // //untuk membuat nomor paggination
        // $nomor_list = $this->request->getVar('page_dewasa') ? $this->request->getVar('page_dewasa') : 1;
        // //end//
        // $detaildewasa = $this->DetailDewasa->Rinci_kaos_dewasa($id_dewasa);
        // $data = $this->DetailDewasa->filterTgl(3);
        // $data['nomor_list'] = $nomor_list;
        // $data['detaildewasa'] = $detaildewasa;

        // return view('pages/detail_d', $data);
    }
}
