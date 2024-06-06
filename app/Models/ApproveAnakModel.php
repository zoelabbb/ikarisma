<?php

namespace App\Models;

use CodeIgniter\Model;

class ApproveAnakModel extends Model
{
    protected $table            = 'approve_anak';
    protected $primaryKey       = 'id_approve';
    // // protected $returnType       = 'object';
    protected $allowedFields    = ['nama_lengkap', 'nama_panggilan', 'ukuran', 'model'];
    protected $useSoftDeletes = true;

    // function getAnak()
    // {

    //     return $this->db->table('anak')
    //         ->select('anak.nama_anak, anak.jenis,anak.jumlah')
    //         ->join('bayar_anak', 'bayar_anak.id_bayar=anak.id_anak', 'left')
    //         ->get()->getResult();
    // }
}
// $hsl = $this->db->query("SELECT * FROM barang WHERE kode='$kode'");
