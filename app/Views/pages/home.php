<?= $this->extend('layout/index') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu') ?>
<div class="page-heading d-flex justify-content-center">
    <h3>SELAMAT DATANG Di WEB IKARISMA</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="d-flex justify-content-center">
                                    <div class="stats-icon purple">
                                        <a href="/daftar/dewasa">
                                            <i class="iconly-boldAdd-User"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h6 class="text-muted font-semibold"> Registrasi Dewasa</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="d-flex justify-content-center">
                                    <div class="stats-icon blue">
                                        <a href="/daftar/anak">
                                            <i class="iconly-boldProfile"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h6 class="text-muted font-semibold"> Registrasi Anak</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="d-flex justify-content-center">
                                    <div class="stats-icon green">
                                        <a href="/kaos"><i class="bi bi-book-half"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h6 class="text-muted font-semibold">List dewasa</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="d-flex justify-content-center">
                                    <div class="stats-icon red">
                                        <a href="/kaos_anak"> <i class="iconly-boldBookmark"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h6 class="text-muted font-semibold">List Anak</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <img src="<?= base_url() ?>/assets/img/B.png" width="250" height="400"></a>
    </section>
</div>
<h4>Menunggu Approval / Persetujuan</h4>
<section class="section">
    <p> Jika Nama Sudah Tidak Ada Di Daftar Approve Maka Permintaan Sudah di Setujui Oleh Admin<br />
        Dan Bisa Dilihat Pada Menu List Masing - Masing Ketegori
    </p>
    <div class="row" id="table-inverse">


        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Approval Dewasa</h4>
                </div>
                <div class="card-content">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table  table-hover table-dark lg">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Panggilan</th>
                                    <th>Model</th>
                                    <th>Ukuran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($daftar as $acc) : ?>
                                    <tr class="table-success">
                                        <td class=""><?= $no++; ?></td>
                                        <td class=""><?= $acc['nama_lengkap']; ?></td>
                                        <td class=""><?= $acc['nama_panggilan']; ?></td>
                                        <td><?= $acc['model']; ?></td>
                                        <td class=""><?= $acc['ukuran']; ?></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Approval Anak</h4>
                </div>


                <!-- Table with no outer spacing -->
                <div class="table-responsive">
                    <table class="table table-hover table-dark lg">

                        <thead>
                            <tr class="hover">
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Panggilan</th>
                                <th>Model</th>
                                <th>Ukuran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($daftar_a as $acc) : ?>
                                <tr class="text-drak table-danger">
                                    <td class=""><?= $no++; ?></td>
                                    <td class=""><?= $acc['nama_lengkap']; ?></td>
                                    <td class=""><?= $acc['nama_panggilan']; ?></td>
                                    <td><?= $acc['model']; ?></td>
                                    <td class=""><?= $acc['ukuran']; ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?= $this->endSection() ?>