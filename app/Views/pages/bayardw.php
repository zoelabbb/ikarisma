<?= $this->extend('layout/index') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu') ?>

<section class="section">
    <div class="row" id="table-inverse">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Inverse table</h4>
                </div>
                <div class="card-content">

                    <div class="card-body">

                        <div class="row">
                            <div class="col-6">
                                <form action="" method="get">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" value="<?= $keyword ?>" placeholder="Cari Data" name="keyword">
                                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <!-- table with dark -->
                    <div class="table-responsive">
                        <table class="table table-dark mb-0">
                            <thead>
                                <th>NO</th>
                                <th>Nama Lengkap</th>
                                <th>Nama panggilan</th>
                                <th>NO_ID</th>
                                <th>BAYAR</th>

                            </thead>
                            <tbody>
                                <!-- untuk perhitungan nomor pagination agar tidak kembali ke hitungan dari 1 --->
                                <?php $no = 1 + (3 * ($nomor_list - 1)); ?>
                                <!-- end --->
                                <?php foreach ($dewasa as $bayardw) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $bayardw['nama_panggilan']; ?></td>
                                        <td><?= $bayardw['nama_lengkap']; ?></td>
                                        <td><?= $bayardw['id_dewasa']; ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="#" role="button">PILIH</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                        <?= $pager->links('dewasa', 'paggination'); ?>
                    </div>
                    <div class="card-body">

                    </div>
                    <!-- table with light -->

                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>