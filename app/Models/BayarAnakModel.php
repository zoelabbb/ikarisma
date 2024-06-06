<?php

namespace App\Models;

use CodeIgniter\Model;

class BayarAnakModel extends Model
{
    protected $table      = 'bayar_anak';
    protected $primaryKey = 'id_bayar';
    protected $allowedFields    = ['tgl_bayar', 'bayar', 'id_anak', 'user_nama'];

    public function Rinci_kaos_anak($id_anak)
    {
        //penggunaan query manual
        $sql = "SELECT anak.nama_anak,anak.jenis,bayar_anak.tgl_bayar,bayar_anak.bayar,bayar_anak.user_nama 
        FROM bayar_anak LEFT JOIN anak ON anak.id_anak = bayar_anak.id_anak
         WHERE bayar_anak.id_anak=$id_anak";

        //inisialisasi query
        $query = $this->db->query($sql);

        //untuk hasil dalam bentuk array
        $dataquery = $query->getResultArray();

        //untuk mengembalikan hasil query ke controller
        return $dataquery;
    }

    public function getDuit()
    {
        return $this->db->table('bayar_dewasa')
            ->select('SUM(bayar_dewasa.bayar) AS byr_dw,SUM(bayar_anak.bayar) AS byr_ank')
            ->join('bayar_anak', 'bayar_dewasa.id_bayar=bayar_anak.id_anak', 'left')
            ->get()->getResult();
    }
}
