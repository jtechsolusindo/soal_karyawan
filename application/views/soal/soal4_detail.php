<div class="row mt-5 mb-5">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="d-flex justify-content-between">
            <h4>Detail Barang</h4>
            <a href="<?= base_url() . 'soal4' ?>" class="btn btn-danger">Kembali</a>
        </div>
        <hr>
        <form id="formulir">
            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?= $barang->nama ?>" disabled />
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Barang</label>
                <input type="text" class="form-control" name="harga_barang" id="harga_barang" value="<?= number_format($barang->harga, 0, ',', '.'); ?>" disabled />
            </div>
            <div class="d-flex justify-content-between">
                <h5 class="mb-0">Foto Barang</h5>
            </div>
            <hr>
            <table class="table table-bordered mt-2">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>FOTO</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang_foto as $k => $foto) {
                        $url_foto = base_url() . 'files/foto_barang/' . $foto->foto
                    ?>
                        <tr>
                            <td><?= ++$k ?></td>
                            <td><img src="<?= $url_foto ?>" style="width: 100px;" /></td>
                            <td>
                                <a href="<?= $url_foto ?>" target="_blank" class="btn btn-warning">Lihat</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </form>
    </div>
</div>

<script>
    var BASE_URL = '<?= base_url() ?>';

    $(document).ready(function() {

    });
</script>