<?php

namespace App\Models;

use CodeIgniter\Model;

class ApproveDewasaModel extends Model
{
    protected $table      = 'approve_dewasa';
    protected $primaryKey = 'id_approve';
    protected $allowedFields    = ['nama_lengkap', 'nama_panggilan', 'ukuran', 'model'];
    protected $useSoftDeletes = true;




    public function getDewasa()
    {

        return $this->db->table('approve_dewasa')
            ->select('approve_dewasa.nama_lengkap,approve_dewasa.nama_panggilan,approve_dewasa.id_approve,approve_dewasa.model,approve_dewasa.ukuran,kaos.id_kaos,approve_dewasa.deleted_at')
            ->join('kaos', 'kaos.id_kaos=approve_dewasa.id_approve', 'left')
            ->get()->getResult();
    }
}
 // return $this->where(['id_approve' => $id_approve])->frist();