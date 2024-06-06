<?= $this->extend('layout/index') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu') ?>

<section class="section">
    <div class="card">
        <div class="card-header">

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
            <h4 class="card-title">LIST KAOS ANAK</h4>
            <table class="table mb-0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Model</th>
                        <th>Uang Masuk</th>
                        <th>STATUS</th>
                        <th>Rincian</th>
                    </tr>
                </thead>
                <tbody class="bg-dark text-white">
                    <!-- untuk perhitungan nomor pagination agar tidak kembali ke hitungan dari 1 --->
                    <?php $no = 1 + (10 * ($nomor_list - 1)); ?>
                    <!-- end --->
                    <?php
                    foreach ($anak as $anaks) :
                        if ($anaks['jumlah'] >= 75000 ||  $anaks['jumlah'] == 75000) {
                            $status = 'LUNAS';
                        } else {
                            $status = 'BELUM LUNAS';
                        };

                    ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $anaks['nama_anak'] ?></td>
                            <td><?= $anaks['jenis'] ?></td>
                            <td>Rp. <?= $anaks['jumlah'] ?></td>
                            <td><?= $status ?></td>
                            <td>
                                <a class="btn btn-success btn-sm" href="/detail_a/<?= $anaks['id_anak'] ?>" role="button">Lihat</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('anak', 'paggination'); ?>
        </div>
    </div>

</section>
<?= $this->endSection() ?>