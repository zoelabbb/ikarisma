<?php

namespace App\Models;

use CodeIgniter\Model;

class AnakModel extends Model
{
    protected $table            = 'anak';
    protected $primaryKey       = 'id_anak';
    // // protected $returnType       = 'object';
    protected $allowedFields    = ['nama_anak', 'nama_panggilan', 'ukuran', 'jenis'];

    function getAnak()
    {

        return $this->db->table('anak')
            ->select('anak.nama_anak, anak.jenis,anak.jumlah')
            ->join('bayar_anak', 'bayar_anak.id_bayar=anak.id_anak', 'left')
            ->get()->getResult();
    }
    function cari($keyword)
    {
        return $this->table('anak')->like('nama_anak', $keyword);
    }
}
// $hsl = $this->db->query("SELECT * FROM barang WHERE kode='$kode'");
