<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class home_admin extends BaseController
{
    //---------List_data--------//


    // protected $ListApproveModel;
    // public function __construct()
    // {
    //     $this->ListApproveModel = new ListApproveModel();
    // }
    public function home_admin()
    {
        // $approve = $this->ListApproveModel->getApprove();
        // $data = [
        //     'approve' => $approve

        // ];
        return view('mimin/home_admin');
    }
}
