<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields    = ['tgl_transaksi', 'jml_transaksi', 'id_dewasa', 'id_anak', 'nama_admin', 'tgl_pengeluaran', 'jml_pengeluaran', 'keterangan', 'admin_pengeluaran'];

    public function Rinci_kaos_dewasa($id_dewasa)
    {
        //penggunaan query manual
        $sql = "SELECT dewasa.nama_lengkap,dewasa.model,DATE_FORMAT(transaksi.tgl_transaksi,'%d-%m-%Y') AS tanggal,transaksi.jml_transaksi,transaksi.nama_admin 
        FROM transaksi LEFT JOIN dewasa ON dewasa.id_dewasa = transaksi.id_dewasa
         WHERE transaksi.id_dewasa=$id_dewasa";

        //inisialisasi query
        $query = $this->db->query($sql);

        //untuk hasil dalam bentuk array
        $dataquery = $query->getResultArray();

        //untuk mengembalikan hasil query ke controller
        return $dataquery;
    }

    public function Rinci_kaos_anak($id_anak)
    {
        //penggunaan query manual
        $sql = "SELECT anak.nama_anak,anak.jenis,DATE_FORMAT(transaksi.tgl_transaksi,'%d-%m-%Y') AS tanggal,transaksi.jml_transaksi,transaksi.nama_admin 
        FROM transaksi LEFT JOIN anak ON anak.id_anak = transaksi.id_anak
         WHERE transaksi.id_anak=$id_anak";

        //inisialisasi query
        $query = $this->db->query($sql);

        //untuk hasil dalam bentuk array
        $dataquery = $query->getResultArray();

        //untuk mengembalikan hasil query ke controller
        return $dataquery;
    }

    function Getlaporan()
    {

        return $this->db->table('transaksi')
            ->select('SUM(jml_transaksi)AS bayar,SUM(jml_pengeluaran)AS jum_peng,SUM(jml_transaksi)- SUM(jml_pengeluaran)AS total,jml_pengeluaran')
            ->get()->getResult();
    }

    function pengluar()
    { //query date format dan is not null
        $sql = "SELECT DATE_FORMAT(tgl_pengeluaran, '%d-%m-%Y') AS TGL ,jml_pengeluaran,keterangan,admin_pengeluaran
         FROM transaksi 
          WHERE jml_pengeluaran AND tgl_pengeluaran IS NOT NULL ORDER BY tgl_pengeluaran DESC";
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
        $builder->join('dewasa', 'transaksi.id_dewasa=dewasa.id_dewasa', 'left');
        if ($keyword != '') {
            $builder->like('nama_lengkap', $keyword);
        }
        return [
            'dewasa' => $this->paginate($num, 'dewasa'),
            'pager' => $this->pager,
        ];
    }
}
