<?= $this->extend('layout/index_admin') ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/menu_admin') ?>
<h4>Daftar Menunggu Approval / Persetujuan</h4>
<script>
    function detail($id_approve) {
        $.ajax({
            url: "<?= site_url("admin/approve_dewasa") ?>/" + $id_approve,
            type: "get",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.id_approve != '') {
                    $('#Namalengkap').val($obj.nama_lengkap);
                    $('#Namapanggilan').val($obj.nama_panggilan);
                    $('#Ukuran').val($obj.ukuran);
                    $('#Model').val($obj.model);

                }
            }


        });
    }
</script>
<section class="section">

    <div class="row" id="table-inverse">

        <?php if (session()->getFlashdata('pesan')) { ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('pesan') ?>
            </div>

        <?php } ?>
        <div class="col-8 col-md-10">
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
                                    <th class="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($approve_dewasa as $acc) : ?>
                                    <tr class="table-success">
                                        <td class=""><?= $no++; ?></td>
                                        <td class=""><?= $acc['nama_lengkap'] ?></td>
                                        <td class=""><?= $acc['nama_panggilan'] ?></td>
                                        <td><?= $acc['model'] ?></td>
                                        <td class="">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="detail(<?= $acc['id_approve'] ?>)">
                                                Pilih
                                                <!-- End Button trigger modal -->
                                            </button>
                                            <form method="post" action="/admin/approve_dewasa/<?= $acc['id_approve'] ?>" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-sm">Approve</button>
                                            </form>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
</section>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data Dewasa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-primary text-white">
                <form action="approvedewasa/saveD" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="Namalengkap" class="form-label ">Nama Lengkap</label>
                        <input type="text" class="form-control text-danger fw-bold" id="Namalengkap" name="nama_lengkap" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="Namapanggilan" class="form-label">Nama Panggilan</label>
                        <input type="text" class="form-control text-danger fw-bold" id="Namapanggilan" name="nama_panggilan" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="Ukuran" class="form-label">ukuran</label>
                        <input type="text" class="form-control text-danger fw-bold" id="Ukuran" name="ukuran" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Model" class="form-label">model</label>
                        <input type="text" class="form-control text-danger fw-bold" id="Model" name="model" aria-describedby="emailHelp">
                    </div>
                    <fieldset class=" col-md-2 form-group" required>
                        <select class="form-select text-danger fw-bold" id="basicSelect" name="id_kaos" required>
                            <option selected disabled>KEY</option>
                            <option value="2">PDK</option>
                            <option value="1">PNJ</option>
                        </select>
                    </fieldset>
                    <button type="submit" class="btn btn-warning">Tambah Data</button>
                </form>
            </div>
            <div class="modal-footer bg-dark text-white">

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>