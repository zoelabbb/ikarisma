<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DewasaModel;
use App\Models\AnakModel;
use App\Models\BayardwModel;
use App\Models\TransaksiModel;

class Pengeluaran extends BaseController
{
    protected $DewasaModel;
    protected $AnakModel;
    protected $laporan;
    function __construct()
    {
        $this->AnakModel = new AnakModel();
        $this->DewasaModel = new DewasaModel();
        $this->DewasaBillingModel = new BayardwModel();
        $this->laporan = new TransaksiModel();
    }
    public function pengeluaran()
    {
        $trans = $this->laporan->pengluar();

        $data = [
            'trans' => $trans,
            'transaksi' => $this->laporan->Getlaporan()
        ];
        return view('mimin/pengeluaran', $data);
    }
    public function catatan()
    {
        // insert data unutk tabel transaksi
        $this->laporan->save([
            'admin_pengeluaran' => $this->request->getVar('admin_pengeluaran'),
            'jml_pengeluaran' => $this->request->getVar('jml_pengeluaran'),
            'tgl_pengeluaran' => $this->request->getVar('tgl_pengeluaran'),
            'keterangan' => $this->request->getVar('keterangan')

        ]);

        session()->setFlashdata('pesan', 'Pendaftaran Berhasil Terimakasih!!');
        return redirect()->to('/admin/pengeluaran');
    }
}
