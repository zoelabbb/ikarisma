<?php

namespace App\Models;

use CodeIgniter\Model;

class BayardwModel extends Model
{
    protected $table      = 'bayar_dewasa';
    protected $primaryKey = 'id_bayar';
    protected $allowedFields    = ['tanggal', 'bayar', 'id_dewasa', 'user_nama'];

    public function Rinci_kaos_dewasa($id_dewasa)
    {
        //penggunaan query manual
        $sql = "SELECT dewasa.nama_lengkap,dewasa.model,bayar_dewasa.tanggal,bayar_dewasa.bayar,bayar_dewasa.user_nama 
        FROM bayar_dewasa LEFT JOIN dewasa ON dewasa.id_dewasa = bayar_dewasa.id_dewasa
         WHERE bayar_dewasa.id_dewasa=$id_dewasa";

        //inisialisasi query
        $query = $this->db->query($sql);

        //untuk hasil dalam bentuk array
        $dataquery = $query->getResultArray();

        //untuk mengembalikan hasil query ke controller
        return $dataquery;
    }
    function filterTgl($num, $keyword)
    {
        $builder = $this->builder();
        $builder->join('dewasa', 'bayar_dewasa.id_dewasa=dewasa.id_dewasa', 'left');
        if ($keyword != '') {
            $builder->like('nama_lengkap', $keyword);
        }
        return [
            'dewasa' => $this->paginate($num, 'dewasa'),
            'pager' => $this->pager,
        ];
    }
}
