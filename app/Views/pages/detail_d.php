<?= $this->extend('layout/index') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu') ?>

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4> </h4>
        </div>
        <div class="row">
            <div class="col-9">
                <!-- <form action="/" method="get">
                    <div class="form-group mb-3">
                        <label>DARI
                            <input type="date" class="form-control" value="?= $keyword ?>" placeholder="Cari Nama" name="dari">
                        </label>
                        <label>SAMPAI
                            <input type="date" class="form-control" value="?= $keyword ?>" placeholder="Cari Nama" name="sampai">
                        </label>
                        <button class="btn btn-primary" type="submit">cari</button>
                    </div>
                </form> -->
            </div>

        </div>
        <div class="table-responsive">
            <h4 class="card-title">Rincian Pembayaran</h4>
            <table class="table mb-0">
                <thead class="bg-success text-white text-center">
                    <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>MODEL</th>
                        <th>TANGGAL BAYAR</th>
                        <th>JUMLAH BAYAR</th>
                        <th>ADMIN</th>

                    </tr>
                </thead>
                <tbody class="bg-dark text-white text-center fw-bold">
                    <!-- untuk perhitungan nomor pagination agar tidak kembali ke hitungan dari 1 --->
                    <!-- <php $no = 1 + (3 * ($nomor_list - 1)); ?> -->
                    <!-- end --->
                    <?php $no = 1; ?>
                    <?php
                    foreach ($detaildewasa as $key) :

                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $key['nama_lengkap'] ?></td>
                            <td> <?= $key['model'] ?></td>
                            <td><?= $key['tanggal'] ?></td>
                            <td>Rp. <?= number_format($key['jml_transaksi']) ?></td>
                            <td><?= $key['nama_admin'] ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <!-- <= $pager->links('dewasa', 'paggination'); ?> -->
        </div>
    </div>

</section>
<?= $this->endSection() ?>