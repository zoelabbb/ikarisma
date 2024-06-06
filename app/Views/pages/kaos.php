<?= $this->extend('layout/index') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu') ?>

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4> </h4>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?= $keyword ?>" placeholder="Cari Nama" name="keyword">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="table-responsive">
            <h4 class="card-title">LIST KAOS DEWASA</h4>
            <table class="table mb-0">
                <thead class="bg-success text-white text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Model</th>
                        <th>Uang Masuk</th>
                        <th>Status</th>
                        <th>Rincian</th>
                    </tr>
                </thead>
                <tbody class="bg-dark text-white text-center fw-bold">
                    <!-- untuk perhitungan nomor pagination agar tidak kembali ke hitungan dari 1 --->
                    <!-- <?php $no = 1 + (10 * ($nomor_list - 1)); ?> -->
                    <!-- end --->
                    <?php
                    foreach ($dewasa as $key) :
                        if ($key['jumlah'] >= $key['harga'] || $key['jumlah'] == $key['harga']) {
                            $status = 'LUNAS';
                        } else {
                            $status = 'BELUM LUNAS';
                        };
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $key['nama_lengkap'] ?></td>
                            <td><?= $key['model'] ?></td>
                            <td>Rp. <?= number_format($key['jumlah']) ?></td>
                            <td><?= $status ?></td>


                            <td>
                                <a class="btn btn-primary btn-sm" href="/detail_d/<?= $key['id_dewasa'] ?>" role="button">Detail</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <?= $pager->links('dewasa', 'paggination'); ?>
        </div>
    </div>

</section>
<?= $this->endSection() ?>