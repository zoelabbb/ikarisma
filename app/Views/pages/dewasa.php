<?= $this->extend('layout/index') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu') ?>

<section id="basic-horizontal-layouts">
    <div class="d-flex justify-content-center">
        <div class="col-md-9 col-10 bg-success">
            <div Class="fw-bold text-warning">
                <div class="d-flex justify-content-center bg-dark">
                    <img src="<?= base_url() ?>/assets/img/dfd.png" class="col-md-3">
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?php if (session()->getFlashdata('pesan')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('pesan') ?>
                            </div>

                        <?php } ?>
                        <form class="form form-horizontal" action="/daftar/saved" method="post">
                            <?= csrf_field() ?>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <?php $isInvalidnama_lengkap = (session()->getFlashdata('errNAMA_LENGKAP')) ? 'is-invalid' : '';
                                    ?>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control <?= $isInvalidnama_lengkap ?>" name="nama_lengkap" placeholder="Nama Lengkap">
                                        <?php

                                        if (session()->getFlashdata('errNAMA_LENGKAP')) {
                                            echo '<div id="validationServer03Feedback" class="invalid-feedback">
                                           ' . session()->getFlashdata('errNAMA_LENGKAP') . '
                                          </div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Nama Panggilan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="email-id" class="form-control" name="nama_panggilan" placeholder="Nama panggilan">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Ukuran</label>
                                    </div>
                                    <fieldset class=" col-md-8 form-group">
                                        <select class="form-select" id="basicSelect" name="ukuran">
                                            <option selected>PILIH UKURAN</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                        </select>
                                    </fieldset>
                                    <div class="col-md-3">
                                        <label>Model</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="model" id="2" value="PENDEK">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    <img src="<?= base_url() ?>/assets/img/pdk.png">
                                                </label>
                                            </div>
                                        </li>
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="model" id="1" value="PANJANG">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <img src="<?= base_url() ?>/assets/img/pjg.png">
                                                </label>
                                            </div>
                                        </li>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-warning me-1 mb-1">DAFTAR</button>
                                        <button type="reset" class="btn btn-danger me-1 mb-1">BATAL</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>