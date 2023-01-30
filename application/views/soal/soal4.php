<a href="<?= base_url() . 'soal4/tambah' ?>" class="btn btn-success mt-5 mb-4">Tambah Data</a>
<table class="table table-bordered " id="datatable">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>HARGA</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_barang as $k => $barang) { ?>
            <tr>
                <td><?= ++$k ?></td>
                <td><?= $barang->nama ?></td>
                <td><?= number_format($barang->harga, 0, ',', '.'); ?></td>
                <td>
                    <a href="<?= base_url() . 'soal4/detail/' . $barang->id ?>" class="btn btn-warning">Detail</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    var BASE_URL = '<?= base_url() ?>';
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>