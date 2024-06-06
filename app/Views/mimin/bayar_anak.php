<?= $this->extend('layout/index_admin') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu_admin') ?>

<section class="section">
    <section class="section">
        <script>
            function rinci($id_anak) {
                $.ajax({
                    url: "<?= site_url("/admin/bayar_anak") ?>/" + $id_anak,
                    type: "get",
                    success: function(hasil) {
                        var $obj = $.parseJSON(hasil);
                        if ($obj.id_anak != '') {
                            $('#IDanak').val($obj.id_anak);
                            $('#Namalengkap').val($obj.nama_anak);
                            $('#Namapanggilan').val($obj.nama_panggilan);
                            $('#Ukuran').val($obj.ukuran);
                            $('#Model').val($obj.jenis);
                            $('#Bayar').val($obj.bayar);
                        }
                    }


                });
            }
        </script>
        <div class="row" id="table-inverse">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Session FLas Data-->
                            <?php if (session()->getFlashdata('pesan')) { ?>
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="30" height="30" role="img" aria-label="Success:">
                                        <use xlink:href="#check-circle-fill" />
                                    </svg>
                                    </svg>
                                    <div>
                                        <?php echo session()->getFlashdata('pesan') ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- end session flas-->
                        </div>
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
                        <!-- table with dark -->
                        <div class="table-responsive">
                            <h4 class="card-title">List Bayar Kaos Anak</h4>
                            <table class="table mb-0">
                                <thead class="bg-danger text-white">
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Ukuran</th>
                                    <th>Model</th>
                                    <th>Total Uang Masuk</th>
                                    <th>STATUS</th>
                                    <th>BAYAR</th>

                                </thead>
                                <tbody class="bg-dark text-white">
                                    <!-- untuk perhitungan nomor pagination agar tidak kembali ke hitungan dari 1 --->
                                    <?php $no = 1 + (10 * ($nomor_list - 1)); ?>
                                    <!-- end --->
                                    <?php foreach ($anak as $bayarank) :
                                        if ($bayarank['jumlah'] >= 75000 || $bayarank['jumlah'] == 75000) {
                                            $status = 'LUNAS';
                                        } else {
                                            $status = 'BELUM LUNAS';
                                        };

                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $bayarank['nama_anak']; ?></td>
                                            <td><?= $bayarank['ukuran']; ?></td>
                                            <td><?= $bayarank['jenis']; ?></td>
                                            <td>Rp. <?= $bayarank['jumlah']; ?></td>
                                            <td><?= $status; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="rinci(<?= $bayarank['id_anak']; ?>)">
                                                    Pilih
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                            <?= $pager->links('anak', 'paggination'); ?>
                        </div>
                        <div class="card-body">

                        </div>
                        <!-- table with light -->

                    </div>
                </div>

            </div>
        </div>

        <!---modal bootsrap-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Form Bayar Kaos Anak</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-secondary text-white">
                        <form action="bayar/billing_a" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="Namalengkap" class="form-label  fw-bold">ID USER</label>
                                <input type="text" class="form-control text-danger fw-bold" id="IDanak" name="id_anak" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="Namalengkap" class="form-label  fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control text-danger fw-bold" id="Namalengkap" name="nama_lengkap" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="Ukuran" class="form-label">UKURAN</label>
                                <input type="text" class="form-control text-danger fw-bold" id="Ukuran" name="ukuran" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="mb-3">
                            <label for="basicInput"><code>*Upload bukti bayar</code></label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                        </div>
                            <div class="mb-3">
                                <label for="Model" class="form-label  fw-bold">MODEL</label>
                                <input type="text" class="form-control text-danger fw-bold" id="Model" name="model" aria-describedby="emailHelp" readonly>
                            </div>
                            <?php $isInvalidtgl_bayar = (session()->getFlashdata('errTanggal')) ? 'is-invalid' : '';
                            ?>
                            <div class="mb-3">
                                <label for="Model" class="form-label  fw-bold">Tanggal Bayar</label>
                                <input type="date" class="form-control text-danger fw-bold  <?= $isInvalidtgl_bayar ?>" id="Tanggal" name="tgl_transaksi" aria-describedby="emailHelp" required>
                                <?php

                                if (session()->getFlashdata('errTanggal')) {
                                    echo '<div id="validationServer03Feedback" class="invalid-feedback">
                                           ' . session()->getFlashdata('errTanggal') . '
                                          </div>';
                                }
                                ?>
                            </div>
                            <div class="mb-3">
                                <label for="Model" class="form-label  fw-bold">Jumlah Bayar</label>
                                <input type="number" class="form-control text-danger fw-bold" id="Bayar" name="jml_transaksi" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="Namapanggilan" class="form-label  fw-bold">Nama Admin</label>
                                <input type="text" class="form-control text-danger fw-bold" value="<?= session()->get('user_nama'); ?>" name="nama_admin" aria-describedby="emailHelp" readonly>
                            </div>
                            <button type="submit" class="btn btn-info text-dark fw-bold btn-lg">Bayar Kaos</button>
                        </form>
                    </div>
                    <div class="modal-footer bg-dark text-white">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= $this->endSection() ?>