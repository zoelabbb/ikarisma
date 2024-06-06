<?php

namespace App\Models;

use CodeIgniter\Model;

class DewasaModel extends Model
{
    protected $table            = 'dewasa';
    protected $primaryKey       = 'id_dewasa';
    // // protected $returnType       = 'object';
    protected $allowedFields    = ['nama_lengkap', 'nama_panggilan', 'model', 'ukuran', 'status', 'id_kaos'];

    function getKaos()
    {

        return $this->db->table('dewasa')
            ->select('dewasa.nama_lengkap, dewasa.model,dewasa.jumlah,dewasa.status,kaos.harga,kaos.id_kaos')
            ->join('kaos', 'kaos.id_kaos=dewasa.id_kaos', 'left')
            ->get()->getResult();
    }


    function getCari($num, $keyword)
    {
        $builder = $this->builder();
        $builder->join('kaos', 'kaos.id_kaos=dewasa.id_kaos', 'left');
        if ($keyword != '') {
            $builder->like('nama_lengkap', $keyword);
        }
        return [
            'dewasa' => $this->paginate($num, 'dewasa'),
            'pager' => $this->pager,
        ];
    }

    function sum_j($id_dewasa)
    {  //penggunaan query manual
        // $sql = "SELECT dewasa.nama_lengkap,dewasa.model,dewasa.ukuran,dewasa.id_dewasa,sum(transaksi.jml_transaksi) as jml
        // FROM dewasa LEFT JOIN transaksi ON dewasa.id_dewasa = transaksi.id_dewasa
        //  WHERE transaksi.id_dewasa=$id_dewasa";
        // //inisialisasi query
        // $query = $this->db->query($sql);

        // //untuk hasil dalam bentuk array
        // $dataquery = $query->getResultArray();

        // //untuk mengembalikan hasil query ke controller
        // return $dataquery;
    }
}

// $hsl = $this->db->query("SELECT * FROM barang WHERE kode='$kode'");
