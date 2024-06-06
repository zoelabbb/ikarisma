<?= $this->extend('layout/index_admin') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu_admin') ?>
<div class="page-heading">
    <h3>Selamat datang Admin IKARISMA</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-3 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="stats-icon red">
                                        <a href="/admin/approve_dewasa">
                                            <i class="bi bi-people-fill"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h6 class="text-muted font-semibold"> Approve Dewasa</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="stats-icon blue">
                                        <a href="/admin/approve_anak">
                                            <i class="bi bi-emoji-laughing"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h6 class="text-muted font-semibold"> Approve Anak</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="stats-icon green">
                                        <a href="/admin/bayar_anak"><i class="bi bi-cart-check-fill"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h6 class="text-muted font-semibold">Bayar Kaos Dewasa</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="stats-icon red">
                                        <a href="/admin/bayar_dewasa"><i class="bi bi-cart-check-fill"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h6 class="text-muted font-semibold">Bayar Kaos Anak</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="stats-icon dark">
                                        <a href="/admin/pengeluaran"><i class="bi bi-book-fill"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h6 class="text-muted font-semibold">Pengeluaran</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </section>
</div>

<section class="section">
    <div class="row" id="table-inverse">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menunggu persetujuan</h4>
                </div>
                <div class="card-content">

                    <div class="card-body">

                        <div class="row">
                            <div class="col-6">
                                <form action="" method="get">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" value="" placeholder="Cari Data" name="keyword">
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
                                <th>UKURAN</th>
                                <th>MODEL</th>

                            </thead>
                            <tbody>


                            </tbody>
                        </table>

                    </div>
                    <div class="card-body">

                    </div>
                    <!-- table with light -->

                </div>
            </div>

        </div>
    </div>

    <?= $this->endSection() ?>