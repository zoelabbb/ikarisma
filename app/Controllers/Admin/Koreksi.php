<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DewasaModel;
// use App\Models\AnakModel;
use App\Models\BayardwModel;
// use App\Models\BayarAnakModel;

class Koreksi extends BaseController
{
    protected $DewasaModel;
    protected $AnakModel;
    function __construct()
    {
        // $this->AnakModel = new AnakModel();
        $this->DewasaModel = new DewasaModel();
        $this->KoreksiDewasaModel = new BayardwModel();
        // $this->AnakBillingModel = new BayarAnakModel();
    }
    public function koreksi_dewasa()
    {
        //untuk membuat nomor paggination
        $nomor_list = $this->request->getVar('page_dewasa') ? $this->request->getVar('page_dewasa') : 1;
        //end//
        //untuk pencarian data menggunakan method post atau get//
        $keyword = $this->request->getGet('keyword');
        //end//
        $data = $this->KoreksiDewasaModel->filterTgl(10, $keyword);
        $data['nomor_list'] = $nomor_list;
        $data['keyword'] = $keyword;
        return view('mimin/koreksi_dewasa', $data);
    }
    public function koreksi($id_bayar)
    {
        return json_encode($this->KoreksiDewasaModel->find($id_bayar));
    }

    public function koreksi_d($id_bayar)
    {
        $this->KoreksiDewasaModel->save([
            'id_bayar' => $id_bayar,
            'id_bayar' => $this->request->getVar('id_bayar'),
            'tanggal' => $this->request->getVar('tanggal'),
            'bayar' => $this->request->getVar('bayar'),
            'user_nama' => $this->request->getVar('user_nama')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Di Koreksi!!');
        return redirect()->to('/admin/koreksi_dewasa');
    }


    //end bayar dewasa


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
        $nomor_list = $this->request->getVar('page_anak') ? $this->request->getVar('page_anak') : 1;


        $data = [

            'anak' => $anak->paginate(10, 'anak'),
            'pager' => $this->AnakModel->pager,
            'nomor_list' => $nomor_list,
            'keyword' => $keyword
        ];
        //end//
        return view('mimin/bayar_anak', $data);
    }
    public function rinci($id_anak)
    {
        return json_encode($this->AnakModel->find($id_anak));
    }
    public function billing_a()
    {
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'tgl_bayar' => [
                'label' => 'Tanggal',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ]
        ]);
        if (!$valid) {
            $sessError = [
                'errTanggal' => $validation->getError('tgl_bayar')
            ];
            session()->setFlashdata($sessError);
            return redirect()->to(site_url('/admin/bayar_anak'));
        }
        $this->AnakBillingModel->save([
            'id_anak' => $this->request->getVar('id_anak'),
            'tgl_bayar' => $this->request->getVar('tgl_bayar'),
            'bayar' => $this->request->getVar('bayar'),
            'user_nama' => $this->request->getVar('user_nama')
        ]);
        session()->setFlashdata('pesan', 'Pembayaran Berhasil Terimakasih!!');
        return redirect()->to('/admin/bayar_anak');
    }
    public function update($where, $tb_peserta)
    {
        // $this->db->select('status_verifikasi');
        // $this->db->from($tb_peserta);
        // $this->db->where($where);
        // $result = $this->db->get()->result();
        // if($result && $result[0]->status_verifikasi =='belum')
        // {
        //    $this->db->set('status_verifikasi','sudah');
        // } else{
        //    $this->db->set('status_verifikasi','belum');
        // }

        // $this->db->where($where);
        // $this->db->update($tb_peserta);
    }
}
