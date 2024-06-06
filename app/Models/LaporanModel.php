<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table            = 'laporan';
    protected $primaryKey       = 'id_laporan';
    // // protected $returnType       = 'object';
    protected $allowedFields    = ['tgl_laporan', 'total', 'pengeluaran', 'grand_total'];




    // function getCari($num, $keyword)
    // {
    //     $builder = $this->builder();
    //     $builder->join('kaos', 'kaos.id_kaos=dewasa.id_kaos', 'left');
    //     if ($keyword != '') {
    //         $builder->like('nama_lengkap', $keyword);
    //     }
    //     return [
    //         'dewasa' => $this->paginate($num, 'dewasa'),
    //         'pager' => $this->pager,
    //     ];
    // }

    // function status()
    // {
    // }
}

// $hsl = $this->db->query("SELECT * FROM barang WHERE kode='$kode'");
