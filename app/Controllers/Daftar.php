<?php

namespace App\Controllers;

use App\Models\ApproveAnakModel;
use App\Models\ApproveDewasaModel;

class Daftar extends BaseController
{
    function __construct()
    {
        $this->DewasaModel = new ApproveDewasaModel();
        $this->AnakModel = new ApproveAnakModel();
    }
    public function anak()
    {

        return view('pages/anak');
    }
    public function save()
    {
        //validasi input
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ],
            'nama_panggilan' => [
                'label' => 'NAMA PANGGILAN',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ],
            'ukuran' => [
                'label' => 'UKURAN',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ],
            'model' => [
                'label' => 'MODEL',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ]
        ]);
        if (!$valid) {
            $sessError = [
                'errNAMA_LENGKAP' => $validation->getError('nama_lengkap'),
                'errNAMA_PANGGILAN' => $validation->getError('nama_panggilan'),
                'errUKURAN' => $validation->getError('ukuran'),
                'errMODEL' => $validation->getError('model')
            ];
            session()->setFlashdata($sessError);
            return redirect()->to(site_url('daftar/anak'));
        }
        //insert data unutk tabel anak
        $this->AnakModel->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nama_panggilan' => $this->request->getVar('nama_panggilan'),
            'ukuran' => $this->request->getVar('ukuran'),
            'model' => $this->request->getVar('model')
        ]);

        session()->setFlashdata('pesan', 'Pendaftaran Berhasil Terimakasih!!');
        return redirect()->to('/daftar/anak');
    }

    //-----------------------end daftaranak--------------------------

    public function dewasa()
    {
        return view('pages/dewasa');
    }
    public function saved()

    {
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ],
            'nama_panggilan' => [
                'label' => 'NAMA PANGGILAN',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ],
            'ukuran' => [
                'label' => 'UKURAN',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ],
            'model' => [
                'label' => 'MODEL',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]

            ]
        ]);
        if (!$valid) {
            $sessError = [
                'errNAMA_LENGKAP' => $validation->getError('nama_lengkap'),
                'errNAMA_PANGGILAN' => $validation->getError('nama_panggilan'),
                'errUKURAN' => $validation->getError('ukuran'),
                'errMODEL' => $validation->getError('model')
            ];
            session()->setFlashdata($sessError);
            return redirect()->to(site_url('daftar/dewasa'));
        }
        //insert data unutk tabel deewasa
        $this->DewasaModel->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nama_panggilan' => $this->request->getVar('nama_panggilan'),
            'model' => $this->request->getVar('model'),
            'ukuran' => $this->request->getVar('ukuran')
        ]);
        session()->setFlashdata('pesan', 'Pendaftaran Berhasil Terimakasih!!');
        return redirect()->to('/daftar/dewasa');
    }
}
