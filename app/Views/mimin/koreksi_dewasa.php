<?= $this->extend('layout/index_admin') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu_admin') ?>

<section class="section">
    <script>
        function koreksi($id_bayar) {
            $.ajax({
                url: "<?= site_url("/admin/koreksi_dewasa") ?>/" + $id_bayar,
                type: "get",
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.id_bayar != '') {
                        $('#IDbayar').val($obj.id_bayar);
                        $('#Tanggal').val($obj.tanggal);
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

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <form action="" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $keyword ?>" placeholder="Cari Data" name="keyword">
                                    <button class="btn btn-primary  me-1 mb-1" type="submit">Cari</button>
                                    <button type="reset" class="btn btn-danger me-1 mb-1">BATAL</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- table with dark -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <h4 class="card-title">Koreksi Dewasa</h4>
                            <table class="table mb-0">
                                <thead class="bg-success text-white text-center">
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>ID BAYAR</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Koreksi</th>


                                </thead>
                                <tbody class="bg-dark text-white text-center">

                                    <!-- untuk perhitungan nomor pagination agar tidak kembali ke hitungan dari 1 --->
                                    <!-- <?php $no = 1 + (10 * ($nomor_list - 1)); ?> -->
                                    <!-- end --->
                                    <?php foreach ($dewasa as $bayardw) :

                                    ?>


                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $bayardw['nama_lengkap'] ?></td>
                                            <td><?= $bayardw['id_bayar'] ?></td>
                                            <td><?= $bayardw['tanggal'] ?></td>
                                            <td>Rp. <?= $bayardw['bayar'] ?></td>

                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="koreksi(<?= $bayardw['id_bayar']; ?>)">
                                                    Pilih
                                                </button>
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

        <!---modal bayar-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Form Koreksi Dewasa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-secondary text-white">
                        <form action="koreksi/koreksi_d/<?= $bayardw['id_bayar'] ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="Namalengkap" class="form-label  fw-bold">ID Bayar</label>
                                <input type="text" class="form-control text-danger fw-bold" id="IDbayar" name="id_bayar" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="Model" class="form-label  fw-bold">Tanggal Bayar</label>
                                <input type="date" class="form-control text-danger fw-bold" id="Tanggal" name="tanggal" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="Model" class="form-label  fw-bold">Jumlah Bayar</label>
                                <input type="number" class="form-control text-danger fw-bold" id="Bayar" name="bayar" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="Namapanggilan" class="form-label  fw-bold">Nama Admin</label>
                                <input type="text" class="form-control text-danger fw-bold" value="<?= session()->get('user_nama'); ?>" name="user_nama" aria-describedby="emailHelp" readonly>
                            </div>
                            <button type="submit" class="btn btn-info text-dark fw-bold btn-lg">Simpan</button>
                        </form>
                    </div>
                    <div class="modal-footer bg-dark text-white">

                    </div>
                </div>
            </div>
        </div>
</section>

<?= $this->endSection() ?>