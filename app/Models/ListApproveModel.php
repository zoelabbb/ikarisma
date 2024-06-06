<?php

namespace App\Models;

use CodeIgniter\Model;

class ListApproveModel extends Model
{
    function getApprove()
    {

        return $this->db->table('approve_dewasa')
            ->select('approve_dewasa.nama_lengkap', 'approve_anak.nama_lengkap')
            ->join('approve_anak', 'approve_anak.id_approve=approve_dewasa.id_approve', 'left')
            ->get()->getResult();
    }
}

// $hsl = $this->db->query("SELECT * FROM barang WHERE kode='$kode'");
