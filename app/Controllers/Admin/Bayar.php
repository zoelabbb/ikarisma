<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DewasaModel;
use App\Models\AnakModel;
use App\Models\BayardwModel;
use App\Models\BayarAnakModel;
use App\Models\TransaksiModel;

class Bayar extends BaseController
{
    protected $DewasaModel;
    protected $AnakModel;
    function __construct()
    {
        $this->AnakModel = new AnakModel();
        $this->DewasaModel = new DewasaModel();
        $this->Transaksi = new TransaksiModel();
    }
    public function bayar_dewasa()
    {
        //untuk membuat nomor paggination
        $nomor_list = $this->request->getVar('page_dewasa') ? $this->request->getVar('page_dewasa') : 1;
        //end//
        //untuk pencarian data menggunakan method post atau get//
        $keyword = $this->request->getGet('keyword');
        //end//
        $data = $this->DewasaModel->getCari(10, $keyword);
        $data['nomor_list'] = $nomor_list;
        $data['keyword'] = $keyword;
        return view('mimin/bayar_dewasa', $data);
    }
    public function detail($id_dewasa)
    {
        return json_encode($this->DewasaModel->find($id_dewasa));
    }

    public function billing_d()
    {
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'tgl_transaksi' => [
                'label' => 'Tanggal',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ]
        ]);
        if (!$valid) {
            $sessError = [
                'errTanggal' => $validation->getError('tanggal')
            ];
            session()->setFlashdata($sessError);
            return redirect()->to(site_url('/admin/bayar_dewasa'));
        }
        $this->Transaksi->save([
            'id_dewasa' => $this->request->getVar('id_dewasa'),
            'tgl_transaksi' => $this->request->getVar('tgl_transaksi'),
            'jml_transaksi' => $this->request->getVar('jml_transaksi'),
            'nama_admin' => $this->request->getVar('nama_admin')
        ]);
        // $this->DewasaModel->save([
        //     'jumlah' => $this->request->getVar('id_dewasa'),
        //     'tgl_transaksi' => $this->request->getVar('tgl_transaksi'),
        //     'jml_transaksi' => $this->request->getVar('jml_transaksi'),
        //     'nama_admin' => $this->request->getVar('nama_admin')
        // ]);
        session()->setFlashdata('pesan', 'Pembayaran Berhasil Terimakasih!!');
        return redirect()->to('/admin/bayar_dewasa');
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
            'tgl_transaksi' => [
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
        $this->Transaksi->save([
            'id_anak' => $this->request->getVar('id_anak'),
            'tgl_transaksi' => $this->request->getVar('tgl_transaksi'),
            'jml_transaksi' => $this->request->getVar('jml_transaksi'),
            'nama_admin' => $this->request->getVar('nama_admin')
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
