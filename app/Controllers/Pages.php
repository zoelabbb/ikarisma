<?php

namespace App\Controllers;

use App\Models\ApproveDewasaModel;
use App\Models\ApproveAnakModel;


class Pages extends BaseController
{
    //---------List_data--------//


    protected $ApproveModelDewasa;
    public function __construct()
    {
        $this->ModelDewasa = new ApproveDewasaModel();
        $this->ModelAnak = new ApproveAnakModel();
    }
    public function index()
    {
        $daftar = $this->ModelDewasa->findAll();
        $daftar_a = $this->ModelAnak->findAll();
        $data = [
            'daftar' => $daftar,
            'daftar_a' => $daftar_a

        ];
        return view('pages/home', $data);
    }
}
