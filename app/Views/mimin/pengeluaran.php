<?= $this->extend('layout/index_admin') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu_admin') ?>


<section id="basic-horizontal-layouts">
    <div class="d-flex justify-content-center">
        <div class="col-md-9 col-8 bg-success">
            <div Class="fw-bold text-warning">
                <div class="d-flex justify-content-center bg-dark">
                    <h4 class="text-white">CATATAN PENGELUARAN</h4>
                </div>

                <div class="card-content">
                    <div class="card-body">
                        <!-- strat alert -->
                        <?php if (session()->getFlashdata('pesan')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('pesan') ?>
                            </div>

                        <?php } ?>
                        <!-- end alret -->

                        <?php foreach ($transaksi as $key) : ?>
                            <form class="form form-horizontal" action="pengeluaran/catatan" method="post">
                                <?= csrf_field() ?>
                                <div class="form-body">

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Tanggal Pengeluaran</label>
                                        </div>
                                        <div class=" col-md-8 form-group">
                                            <input type="date" id="first-name" class="form-control" name="tgl_pengeluaran" placeholder="Nama lengkap" required>
                                        </div>
                                        <div class="col-md-3">
                                            <labe>jumlah Masuk</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="email-id" class="form-control text-danger fw-bold" value="<?= number_format($key->bayar); ?> " placeholder="Nama panggilan" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Pengeluaran</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="email-id" class="form-control" name="jml_pengeluaran" placeholder="Pengeluaran" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Keterangan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="email-id" class="form-control" name="keterangan" placeholder="keterangan" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Total Pengeluaran</label>
                                        </div>
                                        <div class="col-md-3 form-group ">
                                            <input type="text" id="email-id" class="form-control text-danger text-center fw-bold" value="<?= number_format($key->jum_peng); ?> " readonly>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Jumlah Sisah</label>
                                        </div>
                                        <div class="col-md-3 form-group ">
                                            <input type="text" id="email-id" class="form-control text-danger text-center fw-bold" value="<?= number_format($key->total); ?> " readonly>
                                        </div>

                                        <div class="col-md-8 form-group ">
                                            <input type="hidden" id="email-id" class="form-control" name="admin_pengeluaran" value="<?= session()->get('user_nama'); ?>" readonly>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-warning me-1 mb-1">SIMPAN</button>
                                            <button type="reset" class="btn btn-danger me-1 mb-1">BATAL</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </form>

                    </div>
                </div>
            </div>

        </div>

</section>
<div class="table-responsive mt-3">
    <h4 class="card-title">RINCIAN PENGELUARAN</h4>
    <table class="table mb-0">
        <thead class="bg-success text-white text-center">
            <tr>
                <th>No</th>
                <th>Tanggal Pengeluaran</th>
                <th>Jumlah Pengeluaran</th>
                <th>Keterangan</th>
                <th>Nama Admin</th>


            </tr>
        </thead>
        <tbody class="bg-dark text-white text-center fw-bold">
            <!-- untuk perhitungan nomor pagination agar tidak kembali ke hitungan dari 1 --->
            <!-- <?php $no = 1; ?> -->
            <!-- end --->
            <?php foreach ($trans as $a) :

            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $a['TGL'] ?></td>
                    <td>Rp. <?= number_format($a['jml_pengeluaran']) ?></td>
                    <td><?= $a['keterangan'] ?></td>
                    <td><?= $a['admin_pengeluaran'] ?></td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<?= $this->endSection() ?>