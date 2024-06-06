<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DewasaModel;

class Bayardw extends BaseController
{
    protected $DewasaModel;
    function __construct()
    {
        $this->DewasaModel = new DewasaModel();
    }
    public function bayardw()
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
        return view('mimin/bayardw', $data);
    }
}
